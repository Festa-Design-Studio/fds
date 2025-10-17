<?php

namespace App\Console\Commands;

use Illuminate\Console\Command;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Schema;

class CleanupOrphanedServiceTables extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'db:cleanup-orphaned-services {--force : Force the operation without confirmation}';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Drop orphaned service-related tables to fix migration state';

    /**
     * Execute the console command.
     */
    public function handle()
    {
        $tables = ['service_deliverables', 'service_sectors', 'services'];
        $tablesToDrop = [];

        $this->info('Checking for orphaned service tables...');

        // Check which tables exist
        foreach ($tables as $table) {
            if (Schema::hasTable($table)) {
                // Check if migration record exists
                $migrationExists = DB::table('migrations')
                    ->where('migration', 'like', "%create_{$table}_table%")
                    ->exists();

                if (!$migrationExists) {
                    $tablesToDrop[] = $table;
                    $this->warn("Found orphaned table: {$table}");
                }
            }
        }

        if (empty($tablesToDrop)) {
            $this->info('No orphaned tables found.');
            return 0;
        }

        // Confirm before dropping
        if (!$this->option('force')) {
            if (!$this->confirm('Do you want to drop these orphaned tables?')) {
                $this->info('Operation cancelled.');
                return 1;
            }
        }

        // Drop tables in reverse order (to handle foreign keys)
        foreach (array_reverse($tablesToDrop) as $table) {
            $this->info("Dropping table: {$table}");
            Schema::dropIfExists($table);
        }

        $this->info('Successfully cleaned up orphaned tables.');
        return 0;
    }
}

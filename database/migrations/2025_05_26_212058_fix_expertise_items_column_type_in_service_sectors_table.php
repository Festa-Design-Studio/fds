<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        // First, let's check if we need to convert existing data
        $sectors = DB::table('service_sectors')->whereNotNull('expertise_items')->get();

        foreach ($sectors as $sector) {
            // If the data is already a valid JSON string, we don't need to change it
            $expertiseItems = $sector->expertise_items;

            // Validate that it's proper JSON
            if (is_string($expertiseItems)) {
                $decoded = json_decode($expertiseItems, true);
                if (json_last_error() === JSON_ERROR_NONE) {
                    // Data is already valid JSON, no conversion needed
                    continue;
                }
            }
        }

        // Change the column type to JSON
        Schema::table('service_sectors', function (Blueprint $table) {
            $table->json('expertise_items')->nullable()->change();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('service_sectors', function (Blueprint $table) {
            $table->text('expertise_items')->nullable()->change();
        });
    }
};

<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::table('projects', function (Blueprint $table) {
            // First create new foreign key columns
            $table->foreignId('sector_id')->nullable()->after('featured_image');
            $table->foreignId('industry_id')->nullable()->after('sector_id');
            $table->foreignId('sdg_alignment_id')->nullable()->after('industry_id');
            
            // Transfer data (will need to be handled manually or in a seeder)
            
            // Then remove old string columns (only if you've transferred data)
            // We'll leave the original columns for now to maintain backward compatibility
            // $table->dropColumn(['sector', 'industry', 'sdg_alignment']);
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('projects', function (Blueprint $table) {
            $table->dropColumn(['sector_id', 'industry_id', 'sdg_alignment_id']);
        });
    }
};

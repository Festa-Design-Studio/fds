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
        Schema::table('our_processes', function (Blueprint $table) {
            // Add fields for displaying metric values
            $table->string('metric_value')->nullable()->after('metric_type'); // e.g., "25+", "150%", "4.8/5"
            $table->string('metric_label')->nullable()->after('metric_value'); // e.g., "clients served", "increase", "rating"
            $table->boolean('show_metric')->default(false)->after('metric_label'); // Toggle to show/hide metrics
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('our_processes', function (Blueprint $table) {
            $table->dropColumn(['metric_value', 'metric_label', 'show_metric']);
        });
    }
};

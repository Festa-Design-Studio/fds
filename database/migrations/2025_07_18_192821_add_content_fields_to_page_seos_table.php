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
        Schema::table('page_seos', function (Blueprint $table) {
            // Add content fields for dynamic pages
            $table->json('content')->nullable()->after('structured_data');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('page_seos', function (Blueprint $table) {
            $table->dropColumn('content');
        });
    }
};
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
        Schema::table('service_sectors', function (Blueprint $table) {
            $table->text('challenge_items')->nullable()->after('challenge_description');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('service_sectors', function (Blueprint $table) {
            $table->dropColumn('challenge_items');
        });
    }
};

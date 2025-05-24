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
        Schema::create('about_sdgs', function (Blueprint $table) {
            $table->id();
            $table->integer('number')->unique(); // SDG number 1-17
            $table->string('title');
            $table->text('description')->nullable();
            $table->string('svg_path'); // storage path for uploaded SVG
            $table->boolean('is_active')->default(true);
            $table->integer('display_order')->default(0);
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('about_sdgs');
    }
};

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
        Schema::table('sectors', function (Blueprint $table) {
            // Hero Section
            $table->string('hero_eyebrow')->nullable();
            $table->string('hero_title')->nullable();
            $table->text('hero_description')->nullable();
            $table->string('hero_button_text')->nullable();

            // Challenge Section
            $table->string('challenge_eyebrow')->nullable();
            $table->string('challenge_title')->nullable();
            $table->text('challenge_description')->nullable();

            // Expertise Section
            $table->string('expertise_eyebrow')->nullable();
            $table->string('expertise_title')->nullable();
            $table->text('expertise_description')->nullable();
            $table->json('expertise_items')->nullable(); // Store as JSON array
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('sectors', function (Blueprint $table) {
            $table->dropColumn([
                'hero_eyebrow',
                'hero_title',
                'hero_description',
                'hero_button_text',
                'challenge_eyebrow',
                'challenge_title',
                'challenge_description',
                'expertise_eyebrow',
                'expertise_title',
                'expertise_description',
                'expertise_items',
            ]);
        });
    }
};

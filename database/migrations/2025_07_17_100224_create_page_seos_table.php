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
        Schema::create('page_seos', function (Blueprint $table) {
            $table->id();
            $table->string('page_identifier')->unique(); // e.g., 'home', 'about', 'contact', 'blog_index', 'toolkit'
            $table->string('page_title')->nullable(); // Human-readable page title for admin
            
            // SEO Meta Tags
            $table->text('meta_description')->nullable();
            $table->text('meta_keywords')->nullable();
            
            // Open Graph Tags
            $table->string('og_title')->nullable();
            $table->text('og_description')->nullable();
            $table->string('og_image')->nullable();
            
            // Twitter Card Tags
            $table->string('twitter_title')->nullable();
            $table->text('twitter_description')->nullable();
            $table->string('twitter_image')->nullable();
            
            // JSON-LD Structured Data (optional custom fields)
            $table->json('structured_data')->nullable();
            
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('page_seos');
    }
};
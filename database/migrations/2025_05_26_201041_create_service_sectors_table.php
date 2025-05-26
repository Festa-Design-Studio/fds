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
        Schema::create('service_sectors', function (Blueprint $table) {
            $table->id();
            $table->string('type')->unique(); // nonprofit, startup
            $table->string('title');
            $table->text('description');
            $table->text('content')->nullable();
            $table->text('challenges_content')->nullable();
            $table->text('expertise_content')->nullable();
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
        Schema::dropIfExists('service_sectors');
    }
};

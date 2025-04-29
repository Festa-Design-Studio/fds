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
        Schema::create('work_metrics', function (Blueprint $table) {
            $table->id();
            $table->string('value');
            $table->string('title');
            $table->text('description');
            $table->string('color_class')->default('text-chicken-comb-600');
            $table->integer('display_order')->default(0);
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('work_metrics');
    }
};

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
        Schema::create('our_processes', function (Blueprint $table) {
            $table->id();
            $table->string('type'); // 'philosophy', 'methodology', 'impact'
            $table->string('title');
            $table->text('description')->nullable();
            $table->string('icon')->nullable(); // SVG icon or icon class
            $table->integer('order_index')->default(0); // For ordering items
            $table->boolean('is_active')->default(true);
            
            // For methodology steps (numbered items)
            $table->integer('step_number')->nullable();
            
            // For philosophy principles 
            $table->text('detailed_content')->nullable();
            
            // For impact metrics
            $table->string('metric_type')->nullable(); // Type of metric being measured
            
            $table->timestamps();
            
            // Add indexes
            $table->index(['type', 'is_active', 'order_index']);
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('our_processes');
    }
};

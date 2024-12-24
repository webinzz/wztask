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
        Schema::create('goals', function (Blueprint $table) {
            $table->id();
            $table->string('target_value');
            $table->string('current_value')->default("belum");
            $table->float('current_persen')->default(0);
            $table->enum('timeline', ['day', 'week', 'month', 'year']);
            $table->enum('status', ['Not Started', 'In Progress', 'Completed'])->default('Not Started');
            $table->string('image');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('goals');
    }
};

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
        Schema::create('schedules', function (Blueprint $table) {
            $table->id();
            $table->foreignId('subject_id')->constrained();
            $table->foreignId('teacher_id')->constrained('users');
            $table->foreignId('group_id')->constrained();
            $table->foreignId('room_id')->constrained();
            $table->tinyInteger('pair');
            $table->enum('week_day', ['monday', 'tuesday', 'wednesday', 'thursday', 'friday', 'saturday']);
            $table->date('data');
            $table->unique(['subject_id', 'teacher_id', 'group_id', 'room_id', 'pair', 'week_day'], 'schedule_unique');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('schedules');
    }
};

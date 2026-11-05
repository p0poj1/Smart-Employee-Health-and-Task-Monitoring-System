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
    Schema::create('task_logs', function (Blueprint $table) {
        $table->id('task_id');
        $table->foreignId('user_id')->constrained('users')->cascadeOnDelete();
        $table->string('task_title', 150);
        $table->decimal('hours_spent', 4, 2)->default(0.00);
        $table->decimal('overtime_hours', 4, 2)->default(0.00);
        $table->date('log_date');
        $table->enum('status', ['in_progress', 'completed'])->default('in_progress');
        $table->timestamps();
    });
}

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('task_logs');
    }
};

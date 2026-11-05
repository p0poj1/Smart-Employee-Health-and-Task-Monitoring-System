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
    Schema::create('burnout_assessments', function (Blueprint $table) {
        $table->id('assessment_id');
        $table->foreignId('user_id')->constrained('users')->cascadeOnDelete();
        $table->decimal('calculated_score', 5, 2);
        $table->enum('risk_tier', ['Low', 'Moderate', 'High']);
        $table->text('recommendation')->nullable();
        $table->text('ai_summary')->nullable();
        $table->timestamps();
    });
}

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('burnout_assessments');
    }
};

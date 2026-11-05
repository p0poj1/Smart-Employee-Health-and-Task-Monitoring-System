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
    Schema::create('wellbeing_checkins', function (Blueprint $table) {
        $table->id('checkin_id');
        $table->foreignId('user_id')->constrained('users')->cascadeOnDelete();
        $table->unsignedTinyInteger('mood_level');
        $table->unsignedTinyInteger('energy_level');
        $table->unsignedTinyInteger('stress_level');
        $table->date('checkin_date');
        $table->timestamps();
    });
}

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('wellbeing_checkins');
    }
};

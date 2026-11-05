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
    Schema::create('biometric_logs', function (Blueprint $table) {
        $table->id('biometric_id');
        $table->foreignId('user_id')->constrained('users')->cascadeOnDelete();
        $table->integer('heart_rate_bpm');
        $table->integer('sleep_minutes');
        $table->dateTime('sync_timestamp')->useCurrent();
    });
}

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('biometric_logs');
    }
};

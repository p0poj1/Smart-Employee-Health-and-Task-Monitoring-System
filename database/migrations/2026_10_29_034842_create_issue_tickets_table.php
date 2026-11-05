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
    Schema::create('issue_tickets', function (Blueprint $table) {
        $table->id('ticket_id');
        $table->foreignId('user_id')->constrained('users')->cascadeOnDelete();
        $table->string('subject', 150);
        $table->enum('category', ['workload', 'blocker']);
        $table->enum('status', ['open', 'in_review', 'resolved'])->default('open');
        $table->timestamps();
    });
}

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('issue_tickets');
    }
};

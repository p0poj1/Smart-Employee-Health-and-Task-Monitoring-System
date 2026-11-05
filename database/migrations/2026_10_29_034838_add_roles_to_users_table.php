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
    Schema::table('users', function (Blueprint $table) {
        $table->unsignedBigInteger('department_id')->nullable()->after('id');
        $table->enum('role', ['employee', 'manager', 'hr'])->default('employee')->after('email');
        $table->string('api_key', 64)->nullable()->unique()->after('role');

        $table->foreign('department_id')->references('department_id')->on('departments')->nullOnDelete();
    });
}

public function down(): void
{
    Schema::table('users', function (Blueprint $table) {
        $table->dropForeign(['department_id']);
        $table->dropColumn(['department_id', 'role', 'api_key']);
    });
}
};

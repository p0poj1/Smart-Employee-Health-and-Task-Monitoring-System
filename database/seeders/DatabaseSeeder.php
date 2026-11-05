<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\User;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\DB;

class DatabaseSeeder extends Seeder
{
    public function run(): void
    {
        // 1. Create a Default Department
        $deptId = DB::table('departments')->insertGetId([
            'department_name' => 'Software Development',
            'created_at'      => now(),
            'updated_at'      => now(),
        ]);

        // 2. Create Employee Test Account
        $emp = User::create([
            'department_id' => $deptId,
            'name'          => 'Amirul Employee',
            'email'         => 'emp@test.com',
            'password'      => Hash::make('password123'),
            'role'          => 'employee',
            'api_key'       => 'API_EMP_TEST_001',
        ]);

        // 3. Create Manager Test Account
        User::create([
            'department_id' => $deptId,
            'name'          => 'Sarah Manager',
            'email'         => 'mgr@test.com',
            'password'      => Hash::make('password123'),
            'role'          => 'manager',
        ]);

        // 4. Create HR Test Account
        User::create([
            'department_id' => $deptId,
            'name'          => 'Alex HR',
            'email'         => 'hr@test.com',
            'password'      => Hash::make('password123'),
            'role'          => 'hr',
        ]);

        // 5. Seed Mock Biometrics (Aolon GTR 3 simulation)
        DB::table('biometric_logs')->insert([
            [
                'user_id'        => $emp->id,
                'heart_rate_bpm' => 76,
                'sleep_minutes'  => 420,
                'sync_timestamp' => now()->subDay(),
            ],
            [
                'user_id'        => $emp->id,
                'heart_rate_bpm' => 88,
                'sleep_minutes'  => 310,
                'sync_timestamp' => now(),
            ]
        ]);

        // 6. Seed a Mock Task Log
        DB::table('task_logs')->insert([
            'user_id'        => $emp->id,
            'task_title'     => 'Setup Database & Auth Verification',
            'hours_spent'    => 5.0,
            'overtime_hours' => 1.5,
            'log_date'       => now()->toDateString(),
            'status'         => 'in_progress',
            'created_at'     => now(),
            'updated_at'     => now(),
        ]);
    }
}
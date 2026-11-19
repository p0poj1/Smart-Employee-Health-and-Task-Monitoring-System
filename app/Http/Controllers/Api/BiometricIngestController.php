<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class BiometricIngestController extends Controller
{
    public function store(Request $request)
    {
        $validated = $request->validate([
            'device_mac'    => 'nullable|string',
            'heart_rate'    => 'required|integer|min:30|max:250',
            'spo2'          => 'nullable|integer|min:70|max:100',
            'stress_level'  => 'nullable|integer|min:0|max:100',
            'sleep_minutes' => 'nullable|integer|min:0|max:1440',
            'sleep_hours'   => 'nullable|numeric|min:0|max:24',
        ]);

        $sleepMinutes = $validated['sleep_minutes']
            ?? (isset($validated['sleep_hours']) ? (int) round($validated['sleep_hours'] * 60) : 420);

        $id = DB::table('biometric_logs')->insertGetId([
            'user_id'        => 4,
            'heart_rate_bpm' => $validated['heart_rate'],
            'spo2'           => $validated['spo2'] ?? 98,
            'stress_level'   => $validated['stress_level'] ?? 30,
            'sleep_minutes'  => $sleepMinutes,
            'sync_timestamp' => now(),
        ], 'biometric_id');

        return response()->json([
            'status'       => 'success',
            'biometric_id' => $id,
        ], 201);
    }
}
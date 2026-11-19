<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\DB;
use App\Http\Controllers\Api\BiometricIngestController;

Route::get('/user', function (Request $request) {
    return $request->user();
})->middleware('auth:sanctum');

Route::get('/biometrics/latest', function () {
    $latest = DB::table('biometric_logs')
        ->where('user_id', 4)
        ->orderByDesc('biometric_id')
        ->first();

    return response()->json($latest);
});

Route::post('/biometrics/ingest', [BiometricIngestController::class, 'store']);
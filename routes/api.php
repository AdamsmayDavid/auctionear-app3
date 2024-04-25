<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Auth\VerificationController;

use App\Http\Controllers\SmsController;
/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "api" middleware group. Make something great!
|
*/

Route::get('/user', function (Request $request) {
    return $request->user();
})->middleware('auth:sanctum');

Route::get('email/verify/{id}/{hash}', [VerificationController::class, 'verify'])->name('verification.verify');

// Route::get('students', function () {
//     return 'Laravel API';
// });
// Route::group(['middleware' => ['signed']], function () {
//     Route::get('/email/verify/{id}/{hash}', [VerificationController::class, 'verify'])->name('verification.verify');
// });

// Route::group(['middleware' => ['throttle:6,1']], function () {
//     Route::post('/email/verify/resend', [VerificationController::class, 'resend'])->name('verification.resend');
// });
Route::get('student', function () {
    return 'I am from laravel api';
});

Route::get('/send_api', [SmsController::class, 'sendSms']);
Route::post('/received_api', [SmsController::class, 'receiveSms']);
Route::post('/status_api', [SmsController::class, 'updateStatus']);


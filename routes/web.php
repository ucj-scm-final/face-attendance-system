<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\StudentRegistrationController;
use App\Http\Controllers\AttendanceController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

Route::resource('student-registrations', StudentRegistrationController::class);

Route::get('/attendance', [AttendanceController::class, 'index']);


Route::get('/attendance/take', [AttendanceController::class, 'take'])->name('attendance.take');
Route::post('/attendance', [AttendanceController::class, 'store'])->name('attendance.store');

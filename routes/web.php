<?php

use App\Http\Controllers\LandingController;
use Illuminate\Support\Facades\Route;

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

Route::middleware('guest')->group(function () {
    Route::controller(LandingController::class)->name('landing.')->group(function () {
        Route::get('/', 'index')->name('index');
        Route::get('/presentation-schedule', 'presentationSchedule')->name('presentationSchedule');
    });
});

<?php

use App\Http\Controllers\DownloadadminController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\PanelController;
use App\Http\Controllers\PaperController;
use App\Http\Controllers\SessionController;
use Illuminate\Auth\Events\Login;
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
        Route::get('/download', 'download')->name('download');
    });
});

Route::get('/login', [LoginController::class, 'index'])->name('login')->middleware('guest');
Route::post('loginn', [LoginController::class, 'authenticate'])->name('login.authenticate')->middleware('guest');
Route::get('/logout', [LoginController::class, 'logout'])->name('logout')->middleware('auth');


Route::middleware('auth')->group(function () {
    Route::get('/home', function () {
        return redirect('/panels'); // atau return view('home');
    });

    Route::resource('panels', PanelController::class);
    Route::resource('sessions', SessionController::class);
    Route::resource('papers', PaperController::class);

    Route::get('/admin_download', [DownloadadminController::class, 'index'])->name('admin_download.index');
    Route::post('/admin_downloadstore', [DownloadadminController::class, 'store'])->name('admin_download.store');
    Route::post('/admin_downloadupdate', [DownloadadminController::class, 'update'])->name('admin_download.update');
    Route::get('/admin_downloaddestroy/{id}', [DownloadadminController::class, 'destroy'])->name('admin_download.destroy');
});

<?php

use App\Http\Controllers\DownloadadminController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\PanelController;
use App\Http\Controllers\PaperController;
use App\Http\Controllers\SessionController;
use Illuminate\Auth\Events\Login;
use App\Http\Controllers\LandingController;
use App\Http\Controllers\PublishPaperController;
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


    Route::get('/admin_publish_papers', [PublishPaperController::class, 'index'])->name('admin_publish_papers.index');
    Route::post('/admin_publish_papers/store', [PublishPaperController::class, 'store'])->name('admin_publish_papers.store');
    Route::put('/admin_publish_papers/update_download/{id}', [PublishPaperController::class, 'update_download'])->name('admin_publish_papers.update_download');
    Route::put('/admin_publish_papers/update_upload/{id}', [PublishPaperController::class, 'update_upload'])->name('admin_publish_papers.update_upload');
    // Route::post('/admin_publish_papers/update', [PublishPaperController::class, 'update'])->name('admin_publish_papers.update');
    // Route::get('/admin_publish_papers/destroy/{id}', [PublishPaperController::class, 'destroy'])->name('admin_publish_papers.destroy');
});

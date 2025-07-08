<?php

use App\Http\Controllers\DownloadadminController;
use App\Http\Controllers\PanelController;
use App\Http\Controllers\PaperController;
use App\Http\Controllers\SessionController;
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

Route::get('/', function () {
    return view('welcome');
});
Route::resource('panels', PanelController::class);
Route::resource('sessions', SessionController::class);
Route::resource('papers', PaperController::class);
Route::get('/admin_download', [DownloadadminController::class, 'index'])->name('admin_download.index');
Route::post('/admin_downloadstore', [DownloadadminController::class, 'store'])->name('admin_download.store');
Route::post('/admin_downloadupdate', [DownloadadminController::class, 'update'])->name('admin_download.update');
Route::get('/admin_downloaddestroy/{id}', [DownloadadminController::class, 'destroy'])->name('admin_download.destroy');

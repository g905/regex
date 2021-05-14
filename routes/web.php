<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ImageController;

/*
  |--------------------------------------------------------------------------
  | Web Routes
  |--------------------------------------------------------------------------
  |
  | Here is where you can register web routes for your application. These
  | routes are loaded by the RouteServiceProvider within a group which
  | contains the "web" middleware group. Now create something great!
  |
 */

Route::get('/', function () {
    $images = \App\Models\Image::get();
    return view('index', ['images' => $images]);
})->name('index');
Route::get('upload', [ImageController::class, 'upload'])->name('image.upload');
Route::post('uploadPost', [ImageController::class, 'uploadPost'])->name('image.upload.post');

Route::middleware(['auth'])->group(function () {
    Route::get('/dashboard', function () {
        return view('dashboard');
    })->name('dashboard');
});

Route::middleware(['auth', 'admin'])->prefix('admin')->group(function () {
    Route::get('/', function () {
        return view('admin.dashboard');
    })->name('admin.dashboard');
});

require __DIR__ . '/auth.php';

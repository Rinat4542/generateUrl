<?php

use App\Http\Controllers\UrlController;
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


Route::controller(UrlController::class)->group(function () {
    Route::get('/', [UrlController::class, 'index'])->name('url.index');
    Route::post('/', [UrlController::class, 'create'])->name('url.create');
    Route::get('/{url}', [UrlController::class, 'shortUrl'])->name('url.shortUrl');
});

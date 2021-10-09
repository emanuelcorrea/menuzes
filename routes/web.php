<?php

use App\Http\Controllers\AdminController;
use App\Http\Controllers\SectionController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;

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

Route::get('/', HomeController::class);

Route::prefix('admin')->group(function () {
    Route::get('/', [AdminController::class, 'index']);
    Route::get('/login', [AdminController::class, 'login']);

    Route::prefix('section')->group(function () {
        Route::get('/show/{section}', [SectionController::class, 'show']);
    });
});


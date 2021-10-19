<?php

use App\Http\Controllers\AdminController;
use App\Http\Controllers\ItemController;
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

Route::middleware('cache.headers:public;max_age=2628000;etag;')->group(function () {
    Route::prefix('admin')->group(function () {
        Route::get('/', [AdminController::class, 'index']);
        Route::get('/login', [AdminController::class, 'login']);
        
        Route::prefix('/section')->group(function () {
            Route::put('/visible/{id}', [SectionController::class, 'visible'])->name('section.visible');
        });

        Route::prefix('/item')->group(function () {
            Route::put('/visible/{id}', [ItemController::class, 'visible'])->name('item.visible');
        });
    
        Route::resource('section', SectionController::class);
        Route::resource('item', ItemController::class);
    });
});


<?php

use Illuminate\Support\Facades\Route;

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

Route::group(['namespace' => 'App\Http\Controllers\Main'], function () {
    Route::get('/', 'IndexController');
});

Route::group(['namespace' => 'App\Http\Controllers\Admin', 'prefix' => 'admin'], function () {
    Route::group(['namespace' => 'Main'], function () {
        Route::get('/', 'IndexController')->name('admin');
    });
    Route::group(['namespace' => 'Floor', 'prefix' => 'floors'], function () {
        Route::get('/', 'IndexController')->name('admin.floor.index');
        Route::get('/create', 'CreateController')->name('admin.floor.create');
        Route::post('/', 'StoreController')->name('admin.floor.store');
        Route::get('/{floor}', 'ShowController')->name('admin.floor.show');
        Route::get('/{floor}/edit', 'EditController')->name('admin.floor.edit');
        Route::patch('/{floor}', 'UpdateController')->name('admin.floor.update');
        Route::delete('/{floor}', 'DeleteController')->name('admin.floor.delete');
    });
});

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

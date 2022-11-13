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

Route::group(['namespace' => 'App\Http\Controllers\Admin', 'prefix' => 'admin', 'middleware' => ['auth', 'admin', 'verified']], function () {
    Route::group(['namespace' => 'Main'], function () {
        Route::get('/', 'IndexController')->name('admin');
    });

    Route::group(['namespace' => 'Article', 'prefix' => 'articles'], function () {
        Route::get('/', 'IndexController')->name('admin.article.index');
        Route::get('/create', 'CreateController')->name('admin.article.create');
        Route::post('/', 'StoreController')->name('admin.article.store');
        Route::get('/{article}', 'ShowController')->name('admin.article.show');
        Route::get('/{article}/edit', 'EditController')->name('admin.article.edit');
        Route::patch('/{article}', 'UpdateController')->name('admin.article.update');
        Route::delete('/{article}', 'DeleteController')->name('admin.article.delete');
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

    Route::group(['namespace' => 'Place', 'prefix' => 'places'], function () {
        Route::get('/', 'IndexController')->name('admin.place.index');
        Route::get('/create', 'CreateController')->name('admin.place.create');
        Route::post('/', 'StoreController')->name('admin.place.store');
        Route::get('/{place}', 'ShowController')->name('admin.place.show');
        Route::get('/{place}/edit', 'EditController')->name('admin.place.edit');
        Route::patch('/{place}', 'UpdateController')->name('admin.place.update');
        Route::delete('/{place}', 'DeleteController')->name('admin.place.delete');
    });

    Route::group(['namespace' => 'User', 'prefix' => 'users'], function () {
        Route::get('/', 'IndexController')->name('admin.user.index');
        Route::get('/create', 'CreateController')->name('admin.user.create');
        Route::post('/', 'StoreController')->name('admin.user.store');
        Route::get('/{user}', 'ShowController')->name('admin.user.show');
        Route::get('/{user}/edit', 'EditController')->name('admin.user.edit');
        Route::patch('/{user}', 'UpdateController')->name('admin.user.update');
        Route::delete('/{user}', 'DeleteController')->name('admin.user.delete');
    });
});

Auth::routes(['verify' => true]);

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

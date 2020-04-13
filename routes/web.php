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

Route::get('/','Frontend\HomeController@index')->name('index');

Route::get('about','Frontend\AboutController@index')->name('about');

Route::get('products','Frontend\ProductController@index')->name('products');

Route::get('store','Frontend\StoreController@index')->name('store');

Auth::routes();

Route::get('/backend', 'HomeController@index')->name('backend');

Route::middleware(['auth'])->prefix('admin')->name('admin.')->group(function() {
    Route::get('/website', 'Backend\WebsiteController@edit')->name('website.edit');
    Route::post('/website', 'Backend\WebsiteController@update')->name('website.update');

    Route::get('home', 'Backend\HomeController@edit')->name('home.edit');
    Route::post('home', 'Backend\HomeController@update')->name('home.update');

    Route::get('about', 'Backend\AboutController@edit')->name('about.edit');
    Route::post('about', 'Backend\AboutController@update')->name('about.update');

    Route::resource('product', 'Backend\ProductController', ['except' => ['show']]);

    Route::get('store', 'Backend\StoreController@edit')->name('store.edit');
    Route::post('store', 'Backend\StoreController@update')->name('store.update');
});

<?php

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

use App\Http\Controllers\GalleryController;

Route::get('/detail/{slug}', 'DetailController@index')
    ->name('detail');

Route::get('/', 'HomeController@index')
    ->name('home');

Route::post('/checkout/{id}', 'CheckoutController@process')
    ->name('checkout-process')
    //jika ingin menambah verifikasi email 'verified' di dalam middleware
    ->middleware(['auth']);

Route::get('/checkout/{id}', 'CheckoutController@index')
    ->name('checkout')
    ->middleware(['auth']);

Route::post('/checkout/create/{detail_id}', 'CheckoutController@create')
    ->name('checkout-create')
    ->middleware(['auth']);

Route::get('/checkout/create/{detail_id}', 'CheckoutController@remove')
    ->name('checkout_remove')
    ->middleware(['auth']);

Route::get('/checkout/confirm/{id}', 'CheckoutController@succes')
    ->name('checkout-success')
    ->middleware(['auth']);

Route::prefix('admin')
    ->namespace('Admin')
    ->middleware(['auth', 'admin'])
    ->group(function () {
        Route::get('/', 'DashboardController@index')
            ->name('dashboard');

        Route::resource('travel-package', 'TravelPackageController');
        Route::resource('gallery', 'GalleryController');
        Route::resource('transaction', 'TransactionController');
    });

Auth::routes(['verify' => true]);

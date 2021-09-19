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

Route::get('/', 'HomeController@index')->name('home');
Route::get('/categories', 'CategoryController@index')->name('categories');
Route::get('/categories/{id}', 'CategoryController@detail')->name('categories-detail');

Route::get('/success', 'CartController@success')->name('success');
Route::get('/details/{id}', 'DetailController@index')->name('detail');
Route::post('/details/{id}', 'DetailController@add')->name('detail-add');


Route::post('/checkout/callback', 'CheckoutController@callback')->name('midtrans-callback');





Route::group(['middleware' => ['auth']], function(){
    Route::get('/dashboard', 'DashboardController@index')->name('dashboard');

    Route::get('/cart', 'CartController@index')->name('cart');
    Route::delete('/cart/{id}', 'CartController@delete')->name('cart-delete');

    Route::post('/checkout', 'CheckoutController@process')->name('checkout');

    Route::get('/dashboard/products', 'DashboardProductController@index')->name('dashboard-products');
    Route::get('/dashboard/products/create', 'DashboardProductController@create')->name('dashboard-products-create');
    Route::get('/dashboard/products/{id}', 'DashboardProductController@detail')->name('dashboard-products-detail');

    Route::get('/dashboard/transactions', 'DashboardTransactionController@index')->name('dashboard-transaction');
    Route::get('/dashboard/transactions/{id}', 'DashboardTransactionController@detail')->name('dashboard-transaction-detail');

    Route::get('/dashboard/settings', 'DashboardSettingController@index')->name('dashboard-settings');
    Route::get('/dashboard/account', 'DashboardSettingController@account')->name('dashboard-account');
});

Route::prefix('admin')
        ->namespace('Admin')
        ->middleware(['auth', 'admin'])
        ->group(function() {
            Route::get('/', 'DashboardController@index')->name('admin-dashboard');
            Route::resource('category', 'CategoryController');
            Route::resource('user', 'UserController');
            Route::resource('product', 'ProductController');
            Route::resource('product-gallery', 'ProductGalleryController');
});


Route::get('/register/success', 'Auth\RegisterController@success')->name('register-success');

Auth::routes();

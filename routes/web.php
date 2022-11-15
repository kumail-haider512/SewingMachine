<?php

use Illuminate\Support\Facades\Route;

require __DIR__.'/auth.php';

Route::get('/', function () {
    
});
	Route::get('/','HomeController@index')->name('home');
	Route::get('/about','HomeController@about')->name('about');
	Route::get('/detail/{id?}','HomeController@detail')->name('detail');
	Route::get('/contact','HomeController@contact')->name('contact');
	Route::get('/service','HomeController@service')->name('service');
	Route::get('/delivery','HomeController@delivery')->name('delivery');
	Route::get('/policy','HomeController@policy')->name('policy');
	Route::get('/return','HomeController@return')->name('return');
	Route::get('/register','HomeController@register')->name('register');
	Route::get('/checkout','HomeController@checkout')->name('checkout');
	Route::post('/intent','StripPaymentController@intent')->name('intent');
	Route::post('/checkout/save','HomeController@saveCheckout')->name('checkout.save');
	Route::get('/wishlist','HomeController@wishlist')->name('wishlist');
	Route::get('/cart/{id?}','HomeController@cart')->name('cart');
	Route::get('/product/{id?}/{name?}','HomeController@product')->name('product');
	Route::get('add-to-cart/{id}','CartController@addToCart')->name('add.to.cart');
	Route::get('add-to-wish/{id}','WishlistController@addToWish')->name('add.to.wish');
	Route::get('remove-from-cart/{id}','CartController@removeToCart')->name('cart.remove');
	Route::get('remove-from-wish/{id}','WishlistController@removeToWish')->name('wish.remove');
	Route::get('/login','HomeController@login')->name('login');
Route::middleware(['admin'])->group(function () {
	Route::prefix('admin')->name('admin.')->namespace('Admin')->group(function() {
		Route::get('/dashboard','AdminController@dashboard')->name('dashboard');
		Route::name('category.')->prefix('category')->group(function () {
	        Route::get('list', 'CategoryController@list')->name('list');
	        Route::get('add', 'CategoryController@add')->name('add');
	        Route::post('save', 'CategoryController@save')->name('save');
	        Route::get('edit/{id?}', 'CategoryController@edit')->name('edit');
	        Route::get('delete/{id?}', 'CategoryController@delete')->name('delete');
	        });
		Route::name('brand.')->prefix('brand')->group(function () {
	        Route::get('list', 'BrandController@list')->name('list');
	        Route::get('add', 'BrandController@add')->name('add');
	        Route::post('save', 'BrandController@save')->name('save');
	        Route::get('edit/{id?}', 'BrandController@edit')->name('edit');
	        Route::get('delete/{id?}', 'BrandController@delete')->name('delete');
	        });
		Route::name('user.')->prefix('user')->group(function () {
	        Route::get('list', 'UserController@list')->name('list');
	        Route::get('add', 'UserController@add')->name('add');
	        Route::post('save', 'UserController@save')->name('save');
	        Route::get('edit/{id?}', 'UserController@edit')->name('edit');
	        Route::get('delete/{id?}', 'UserController@delete')->name('delete');
	        });
		Route::name('product.')->prefix('product')->group(function () {
	        Route::get('list', 'ProductController@list')->name('list');
	        Route::get('add', 'ProductController@add')->name('add');
	        Route::post('save', 'ProductController@save')->name('save');
	        Route::get('edit/{id?}', 'ProductController@edit')->name('edit');
	        Route::get('delete/{id?}', 'ProductController@delete')->name('delete');
	        });

	});
});
	Route::prefix('user')->name('user.')->namespace('User')->group(function() {
		Route::get('/dashboard','UserController@dashboard')->name('dashboard');

	});
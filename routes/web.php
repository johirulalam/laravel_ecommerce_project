<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Frontend\HomeController;
use App\Http\Controllers\Frontend\CartController;
use App\Http\Controllers\Frontend\UserController;
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





Route::group(['namespace' => 'App\Http\Controllers\Frontend'] , function(){

	Route::get('/', [HomeController::class, 'showhomepage'])->name('frontend.homepage');
	Route::get('/product/{slug}', [HomeController::class, 'product_details'])->name('product.details');
	Route::get('/category/{category_slug}', [HomeController::class, 'category_products'])->name('category_products');
	Route::get('/cart', [CartController::class, 'showCart'])->name('cart.show');
	Route::post('/cart', [CartController::class, 'addToCart'])->name('cart.add');
	Route::post('/cart/remove', [CartController::class, 'removeFromCart'])->name('cart.remove');
	Route::get('/cart/clear', [CartController::class, 'clearCart'])->name('cart.clear');



	Route::get('/user/register', [UserController::class, 'registerForm'])->name('user.register');
	Route::post('/user/register', [UserController::class, 'processRegister']);
	Route::get('/user/login', [UserController::class, 'loginForm'])->name('user.login');
	Route::post('/user/login', [UserController::class, 'loginProcess']);
    
});
<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Frontend\HomeController;
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

// Route::get('/', function () {
//     return view('frontend.homepage');

// });




Route::group(['namespace' => 'App\Http\Controllers\Frontend'] , function(){

	Route::get('/', [HomeController::class, 'showhomepage'])->name('frontend.homepage');
	Route::get('/product/{slug}', [HomeController::class, 'product_details'])->name('product.details');

});
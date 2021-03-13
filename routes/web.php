<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\FrontController;
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

Route::get('/', function () {
    return view('welcome');
});

Route::get('/new', 'App\Http\Controllers\FrontController@index');
Route::get('/hi', [FrontController::class, 'index']);
Route::get('/user/{id}/{name}', function($id, $name){
	return ($name);
})->whereNumber('id')->whereAlpha('name');

Route::get('/she/{id}', function($id){
	return $id;
});
Route::get('/reg', 'App\Http\Controllers\FrontController@reg')->name('reg');
Route::post('/reg', 'App\Http\Controllers\FrontController@regsubmit');
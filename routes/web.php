<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Auth;

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


Route::get('/about_us', [App\Http\Controllers\aboutController::class, 'about_us'])->name('about_us');

Route::get('/product', [App\Http\Controllers\productController::class, 'getdataProduct'])->name('product');

Auth::routes();
Route::group(['middleware'=>'member'], function() {
    Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
    // Route::get('/home', 'HomeController@index')->name('home');
});

Route::group(['middleware'=>'admin'], function() {

});

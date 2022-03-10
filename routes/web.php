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
Route::get('/product_details', [App\Http\Controllers\productController::class, 'getdatadetailsproduct'])->name('product_details');
Route::get('/size_guide', [App\Http\Controllers\sizeController::class, 'sizingpage'])->name('sizing_guide');
Route::get('/shipping', [App\Http\Controllers\shippingController::class, 'shippingpage'])->name('shipping');
Route::get('/discussion_list',[App\Http\Controllers\DiscustionController::class, 'index'])->name('discussion_list');
Route::get('/discussion_create',[App\Http\Controllers\DiscustionController::class, 'discussion_create'])->name('discussion_create');
Route::get('/replies',[App\Http\Controllers\DiscustionController::class, 'replies'])->name('replies');
Route::put('/makeDiscussion',[App\Http\Controllers\DiscustionController::class, 'makeDiscussion'])->name('makeDiscussion');

Auth::routes();
Route::group(['middleware'=>'member'], function() {

    // Route::get('/home', 'HomeController@index')->name('home');
});

Route::group(['middleware'=>'admin'], function() {
    Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
});

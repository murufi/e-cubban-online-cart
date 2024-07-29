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

// Route::get('/', 'App\Http\Controllers\HomeController@index')->name('home.index');
Route::get('/', 'App\Http\Controllers\ProductController@index')->name('product.index');
Route::get('/products/{id}', 'App\Http\Controllers\ProductController@show')->name('product.show');

Route::middleware('admin')->group(function () {
Route::get('/admin', 'App\Http\Controllers\admin\AdminHomeController@index')->name('admin.home.index');
Route::get('/admin/products', 'App\Http\Controllers\admin\AdminProductController@index')->name('admin.product.index');
Route::delete('/admin/products/{id}/delete', 'App\Http\Controllers\admin\AdminProductController@delete')->name('admin.product.delete');
Route::post('/admin/products/store', 'App\Http\Controllers\admin\AdminProductController@store')->name('admin.product.store');
Route::get('/admin/products/{id}/edit', 'App\Http\Controllers\admin\AdminProductController@edit')->name('admin.product.edit');
Route::put('/admin/products/{id}/update', 'App\Http\Controllers\admin\AdminProductController@update')->name('admin.product.update');
});
// Route::get('/admin', function () {
//     return view('layouts.admin');
// });
Route::get('/qr-code', function () {
    return view('qr-code');
});
Auth::routes();

// Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Auth;
use App\http\Controllers\VitrineController ;
use App\http\Controllers\HomeController ;
use App\http\Controllers\CategoryController ;
use App\http\Controllers\ProductController ;
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
Route::get('/welcome', function () {
return view('welcome');
});

Route::get('/', [VitrineController::class, 'index'])->name('index');
Route::get('/home', [HomeController::class, 'index'])->name('home');

Auth::routes();



Route::post('/category/save','CategoryController@save')->name('save');
Route::get('/category/edit/{id}','CategoryController@edit')->name('category.edit');
Route::put('/category/update/{id}','CategoryController@update')->name('category.update');
Route::get('/categories','CategoryController@index');
Route::get('/categories','CategoryController@list');
Route::get('category/delete/{id}','CategoryController@delete')->name('category.delete');


Route::get('products/edit/{id}','ProductController@edit')->name('product.edit');
Route::post('/save','ProductController@save')->name('product.save');
Route::get('/products','ProductController@index');
Route::get('/products/create', 'ProductController@create');
Route::get('/products','ProductController@list');
Route::put('/update/{id}','ProductController@update')->name('product.update');
Route::get('/delete/{id}', 'ProductController@delete')->name('product.delete');


Route::get('/evitrine', 'VitrineController@index')->name('evitrine');

Route::get('/product/{id}/detail','VitrineController@detail');

Route::get('/products/category/{id}','VitrineController@products');
Route::get('/categories/category/{name_cat}','VitrineController@category');

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

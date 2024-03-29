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
Route::resource('book','BookController');
Route::resource('category','CategoryController');

Route::name('books')->get('/')->uses('BookController@index');
Route::get('/', function () {
    return view('welcome');
});

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

//リスト一覧画面
Route::get('/', 'ListingsController@index');

//リスト新規画面
Route::get('/new', 'ListingsController@new')->name('new');

//リスト新規登録処理
Route::post('/listings', 'ListingsController@store');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

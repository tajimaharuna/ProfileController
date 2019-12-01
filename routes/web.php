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

Route::get('/', function () {
    return view('welcome');
});

Route::group(['prefix' => 'admin'], function() {
    Route::get('news/create', 'Admin\NewsController@add')->middleware('auth');
});

/* 17. PHP/Laravel 09 Routingについて理解する

3.「http://XXXXXX.jp/XXX というアクセスが来たときに、 
AAAControllerのbbbというAction に渡すRoutingの設定」を書いてみてください。*/

Route::group(['prefix' => 'XXX'], function() {
    Route::get('AAAController@bbb');
});

Route::get('XXX', 'bbb\AAAController@add');

/* 
4.【応用】 前章でAdmin/ProfileControllerを作成し、add Action, edit Actionを
追加しました。web.phpを編集して、admin/profile/create にアクセスしたら 
ProfileController の add Action に、admin/profile/edit にアクセスしたら 
ProfileController の edit Action に割り当てるように設定してください。 */

Route::group(['prefix' => 'admin'],function(){
    Route::get('profile/create','Admin\ProfileController@add')->middleware('auth');
    Route::get('profile/edit','Admin\ProfileController@edit')->middleware('auth');
});

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

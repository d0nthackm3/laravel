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

Route::get('teachers','PagesController@getTeachers');

Route::get('remove','PagesController@getRemove');

Route::get('add','PagesController@getAdd');

Route::get('home','PagesController@getLogin');

Route::get('', 'PagesController@getLogin');
Auth::routes();

Route::get('logout', 'PagesController@getLogout');


Route::get('/home', 'HomeController@index')->name('home');

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

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Route::get('/template',function (){
    return view('base');
});

Route::get('/listeproject', 'project\ProjectController@index')->name('liste');
Route::get('/addproject', 'project\ProjectController@create')->name('add');

Route::post('/addproject', 'project\ProjectController@create')->name('add');
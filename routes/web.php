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

Route::post('/addproject', 'project\ProjectController@store')->name('store');
Route::post('/addcomment', 'project\CommentController@store')->name('storec');
Route::get('/projectdetail/{id}', 'project\ProjectController@show')->name('projecttask');
Route::get('/createcomment', 'project\ProjectController@index')->name('afficheform');

Route::get('/listecomment', 'project\CommentController@index')->name('list');

Route::get('/listetask', 'Task\TaskController@index')->name('listet');
Route::get('/addtask', 'Task\TaskController@create')->name('addt');
Route::post('/addtasks', 'Task\TaskController@store')->name('storet');

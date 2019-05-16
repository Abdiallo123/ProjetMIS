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

Auth::routes();
Route::get('/', 'HomeController@index');


Route::get('/home', 'HomeController@index')->name('home');

Route::get('/template',function (){
    return view('base');
});

Route::get('/fitrerparetat/{etat}', 'project\ProjectController@filtre')->name('filtrer');

Route::get('/listeproject', 'project\ProjectController@index')->name('liste');
Route::get('/addproject', 'project\ProjectController@create')->name('add');
Route::get('/projetactif', 'project\ProjectController@actif')->name('actif');
Route::get('/projetsuspendu', 'project\ProjectController@suspendu')->name('suspendu');
Route::get('/projetenattente', 'project\ProjectController@enattente')->name('enattente');

Route::post('/addproject', 'project\ProjectController@store')->name('store');
Route::post('/addcomment/{project_id}', 'project\CommentController@store')->name('storec');
Route::get('/projectdetail/{id}', 'project\ProjectController@show')->name('projecttask');
Route::get('/createcomment', 'project\ProjectController@index')->name('afficheform');
Route::get('/archiveproject/{id}', 'project\ProjectController@archiver')->name('archiver');
Route::get('/archive', 'project\ProjectController@projetarchiver')->name('archive');
Route::get('restoreproject/{id}', 'project\ProjectController@restaurer')->name('restorer');


Route::get('editproject/{id}','project\ProjectController@edit')->name('editp');
Route::post('updateproject/{id}', 'project\ProjectController@update')->name('updatep');

Route::get('/listecomment', 'project\CommentController@index')->name('list');

Route::get('/listetask', 'Task\TaskController@index')->name('listet');
Route::get('/addtask/{id}', 'Task\TaskController@create')->name('addt');
Route::post('/addtasks/{project_id}', 'Task\TaskController@store')->name('storet');

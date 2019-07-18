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
use Illuminate\Support\Facades\Hash;


Auth::routes();
Route::get('/', 'HomeController@index');


Route::get('/home', 'HomeController@index')->name('home');

Route::get('/template',function (){
    return view('base');
});

Route::group(['middleware' => ['auth']], function () {
    Route::get('/logout', '\App\Http\Controllers\Auth\LoginController@logout');
   
    Route::get('/listeproject', 'project\ProjectController@index')->name('liste');
    Route::get('/projetactif', 'project\ProjectController@actif')->name('actif');
    Route::get('/fitrerparetat/{etat}', 'project\ProjectController@filtre')->name('filtrer');
    Route::get('/projetsuspendu', 'project\ProjectController@suspendu')->name('suspendu');
    Route::get('/projetenattente', 'project\ProjectController@enattente')->name('enattente');
    Route::get('/listeproject', 'project\ProjectController@index')->name('liste')->middleware('logs:1');
    Route::get('/projetactif', 'project\ProjectController@actif')->name('actif')->middleware('logs:2');
    Route::get('/fitrerparetat/{etat}', 'project\ProjectController@filtre')->name('filtrer')->middleware('logs:3');
    Route::get('/projetsuspendu', 'project\ProjectController@suspendu')->name('suspendu')->middleware('logs:4');
    Route::get('/projetenattente', 'project\ProjectController@enattente')->name('enattente')->middleware('logs:5');

    Route::get('/addproject', 'project\ProjectController@create')->name('add')->middleware('logs:6');

    

    Route::post('/addproject', 'project\ProjectController@store')->name('store')->middleware('logs:7');
    Route::post('/addcomment/{project_id}', 'project\CommentController@store')->name('storec')->middleware('logs:8');
    Route::get('/projectdetail/{id}', 'project\ProjectController@show')->name('projecttask')->middleware('logs:9');
    Route::get('/createcomment', 'project\ProjectController@index')->name('afficheform')->middleware('logs:10');
    Route::get('/archiveproject/{id}', 'project\ProjectController@archiver')->name('archiver')->middleware('logs:11');
    Route::get('/archive', 'project\ProjectController@projetarchiver')->name('archive')->middleware('logs:12');
    Route::get('restoreproject/{id}', 'project\ProjectController@restaurer')->name('restorer')->middleware('logs:13');


    Route::get('editproject/{id}','project\ProjectController@edit')->name('editp')->middleware('logs:14');
    Route::post('updateproject/{id}', 'project\ProjectController@update')->name('updatep')->middleware('logs:15');

    Route::get('/listecomment', 'project\CommentController@index')->name('list')->middleware('logs:16');


    Route::get('/listetask', 'Task\TaskController@index')->name('listet')->middleware('logs:17');
    Route::get('/addtask/{id}', 'Task\TaskController@create')->name('addt')->middleware('logs:18');
    Route::post('/addtasks/{project_id}', 'Task\TaskController@store')->name('storet')->middleware('logs:19');
    Route::post('/updateetat/{idt}/{idp}', 'Task\TaskController@update')->name('updateetat')->middleware('logs:20');
    Route::get('/listetask', 'Task\TaskController@index')->name('listet');
    Route::get('/addtask/{id}', 'Task\TaskController@create')->name('addt');
    Route::post('/addtasks/{project_id}', 'Task\TaskController@store')->name('storet');
    Route::post('/tasks/{idt}/projects/{idp}', 'Task\TaskController@update')->name('updateetat');

    
});



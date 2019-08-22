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

Route::get('/reset', function () {
    return view('auth.passwords.reset');
});

Route::resource('types', 'TypesController');
Route::resource('topics', 'TopicsController');
Route::post('/recherche', 'RechercheController@recherche')->name('recherche');

Route::group(['middleware' => ['auth']], function () {

    Route::get('/logout', '\App\Http\Controllers\Auth\LoginController@logout')->middleware('logs:1');
   
    Route::get('/listeproject', 'project\ProjectController@index')->name('liste');
    Route::get('/projetactif', 'project\ProjectController@actif')->name('actif');
    Route::get('/fitrerparetat/{etat}', 'project\ProjectController@filtre')->name('filtrer');
    Route::get('/projetsuspendu', 'project\ProjectController@suspendu')->name('suspendu');
    Route::get('/projetenattente', 'project\ProjectController@enattente')->name('enattente');

    Route::get('/addproject', 'project\ProjectController@create')->name('add');

    

    Route::post('/addproject', 'project\ProjectController@store')->name('store')->middleware('logs:2');
    Route::post('/addcomment/{project_id}', 'project\CommentController@store')->name('storec')->middleware('logs:3');
    Route::get('/projectdetail/{id}', 'project\ProjectController@show')->name('projecttask');
    
    Route::get('/archiveproject/{id}', 'project\ProjectController@archiver')->name('archiver')->middleware('logs:4');
    Route::get('/archive', 'project\ProjectController@listarchive')->name('archive');
    Route::get('restoreproject/{id}', 'project\ProjectController@restaurer')->name('restorer')->middleware('logs:5');
    Route::get('/logs', 'LogsController@index')->name('logs');

    
    Route::post('updateproject/{id}', 'project\ProjectController@update')->name('updatep')->middleware('logs:6');

  


    
    Route::post('/addtasks/{project_id}', 'Task\TaskController@store')->name('storet')->middleware('logs:7');
    Route::post('/updateetat/{idt}/{idp}', 'Task\TaskController@update')->name('updateetat')->middleware('logs:8');
    
    Route::post('/tasks/{idt}/projects/{idp}', 'Task\TaskController@update')->name('updateetat')->middleware('logs:9');

    
});



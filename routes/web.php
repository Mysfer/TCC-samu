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


Route::get('/ouvidoria', 'OuvidoriaController@ouvidoria');

Route::post('/saveFeedback', 'OuvidoriaController@saveFeedback');

Route::get('/adminOuvidoria', ['middleware' => 'authAdmin', 'uses' => 'HomeController@ouvidoria' ]);

Route::get('/admin', ['middleware' => 'authAdmin', 'uses' => 'HomeController@admin' ]);

Route::get('/adminAddCurso', ['middleware' => 'authAdmin', 'uses' => 'CursoController@adminAddCurso' ]);
Route::post('/salvar', 'CursoController@salvar');
Route::get('/cursos', 'CursoController@cursos');
Route::get('/cursosView/{dados}', 'CursoController@cursosView');
Route::get('/insert/{dados}', 'CursoController@insert');
Route::get('/adminUsers', 'CursoController@users');
Route::get('/adminUsersCurso/{dados}', 'CursoController@adminUsersCurso');



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

Route::get('/contato/{id?}', ['uses'=>'ContatoController@index']);

Route::post('/contato', ['uses'=>'ContatoController@Criar']);

Route::put('/contato', ['uses'=>'ContatoController@Editar']);

Route::get('/admin/curso',['as'=>'admin.cursos', 'uses'=>'CursoController@index']);
Route::get('/admin/curso/adicionar',['as'=>'admin.cursos.adicionar', 'uses'=>'CursoController@adicionar']);
Route::post('/admin/curso/salvar',['as'=>'admin.cursos.salvar', 'uses'=>'CursoController@salvar']);
Route::get('/admin/curso/editar/{id}',['as'=>'admin.cursos.editar', 'uses'=>'CursoController@editar']);
Route::put('/admin/curso/atualizar/{id}',['as'=>'admin.cursos.atualizar', 'uses'=>'CursoController@atualizar']);
Route::get('/admin/curso/deletar/{id}',['as'=>'admin.cursos.deletar', 'uses'=>'CursoController@deletar']);
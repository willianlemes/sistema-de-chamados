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

Route::get('/',['as'=>'site.login', 'uses'=>'Site\LoginController@index']);
Route::get('/login',['as'=>'site.login', 'uses'=>'Site\LoginController@index']);
Route::post('/login/entrar',['as'=>'site.login.entrar', 'uses'=>'Site\LoginController@entrar']);


Route::group(['middleware'=>'auth'],function(){

    Route::get('/cliente',['as'=>'cliente.listar', 'uses'=>'ClienteController@index']);
    Route::get('/cliente/adicionar',['as'=>'cliente.adicionar', 'uses'=>'ClienteController@adicionar']);
    Route::get('/cliente/editar/{id}',['as'=>'cliente.editar', 'uses'=>'ClienteController@editar']);
    Route::post('/cliente',['as'=>'cliente.salvar', 'uses'=>'ClienteController@salvar']);
    Route::put('/cliente/alterar/{id}',['as'=>'cliente.alterar', 'uses'=>'ClienteController@alterar']);
    Route::get('/cliente/excluir/{id}',['as'=>'cliente.excluir', 'uses'=>'ClienteController@excluir']);
    Route::get('/login/sair',['as'=>'site.login.sair', 'uses'=>'Site\LoginController@sair']);

    Route::get('/chamado',['as'=>'chamado.listar', 'uses'=>'ChamadoController@index']);
    Route::get('/chamado/adicionar',['as'=>'chamado.adicionar', 'uses'=>'ChamadoController@adicionar']);
    Route::get('/chamado/editar/{id}',['as'=>'chamado.editar', 'uses'=>'ChamadoController@editar']);
    Route::post('/chamado/salvar',['as'=>'chamado.salvar', 'uses'=>'ChamadoController@salvar']);
    Route::put('/chamado/alterar/{id}',['as'=>'chamado.alterar', 'uses'=>'ChamadoController@alterar']);

});


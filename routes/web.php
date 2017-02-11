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
    return view('auth.login');
});

Auth::routes();

Route::get('/home',function(){

	return view("cadastro");
});


Route::group(['middleware' => 'auth'],function()
{
	
	Route::get("cadastro",function()
	{

		return view("cadastro");
	});
	
	Route::get("registeruser",function()
	{
		return view("auth.registerUser");
	});


	Route::get("busca","buscaEstadosController@select");

	Route::get("editar/{id}","editarEstadosController@select");


	//rotas para apenas receber os envios de post
	Route::post("/realizandocadastro","cadastroEstadosController@SalvaCadastro");
	
	Route::post("/registerusercreate","Auth\RegisterController@create");

	Route::post("/editarexecutar/{id}","editarEstadosController@editar");

	Route::get("/deletar/{id}","deleteEstadosController@delete");
	
});

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

/*
|---------------------------------------------------------------------------
| Rotas de navegação
|----------------------------------------------------------------------------
*/

    Route::get('/', function () {
        return view('login');
    })->name('login');

    Route::get('/home', function () {
        return view('index');
    })->name('home');

    Route::group(['prefix' => 'cadastrar'], function(){

      Route::get('/{acao}',  [
        'uses' => 'NavegacaoController@getPaginasCadastrar',
        'as' => 'getPaginaCadastrar'
      ]);
    });

    Route::group(['prefix' => 'listar'], function(){

      Route::get('/{acao}',  [
        'uses' => 'NavegacaoController@getPaginasListar',
        'as' => 'getPaginaListar'
      ]);
    });


/*
|--------------------------------------------------------------------------
| Rotas de CRUD
|--------------------------------------------------------------------------
*/

Route::resource('parceiros', 'ParceiroController');

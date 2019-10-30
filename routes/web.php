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

//Rotas das tabelas
Route::get('/corretores','CorretorController@index')->name('corretores.index');
Route::get('/proprietarios','ProprietariosController@index')->name('proprietarios.index');
Route::get('/imoveis','ImoveisController@index')->name('imoveis.index');
Route::get('/inquilinos','InquilinosController@index')->name('inquilinos.index');
Route::resource('corretores','CorretorController');
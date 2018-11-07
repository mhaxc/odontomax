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
Route::resource('/dentista','DentistaController');
Route::resource('/paciente','PacienteController');
Route::resource('/consulta','ConsultaController');
Route::resource('/agendas','AgendaController');
Route::resource('/convenio','ConvenioController');
Route::resource('/agenda','AgendaController');
Route::resource('/consultorio','ConsultorioController');
Route::resource('/medicamento','MedicamentoController');

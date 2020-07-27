<?php

use Illuminate\Support\Facades\Route;

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
})->name('welcome.index');


Route::get('prueba', function () {
    
    echo "HELLOU PERRAS";
});

Auth::routes();
Route::resource('Personal', 'PersonalController');

Route::post("Contrato/store" , "ContratoController@store");
Route::POST("Contrato/update/{idContrato}" , "ContratoController@update");
Route::resource('Bus', 'BusController');
Route::resource("Contratos" , "ContratoController");
Route::resource('Ruta', 'RutaController');


Route::get('/home', 'HomeController@index')->name('home')->middleware('auth');
Route::get('/Contrato', 'ContratoController@index');

Route::view('/crud', 'crud')->name('crud.index')->middleware(['roles']);

Route::get('/admin/admin', 'AdminController@index')->name('admin.index');
Route::get('/conductor/conductor', 'ConductorController@index')->name('conductor.index');


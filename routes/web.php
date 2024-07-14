<?php

#use Illuminate\Support\Facades\Route;

#Route::get('/', function () {
 #   return view('welcome');
#});




Route::view('/','home')->name('home');
Route::view('nosotros','nosotros')->name('nosotros');
//Colocar la ruta completa para la version 8 en adelante
Route::view('contacto','contacto')->name('contacto');

Route::get('personas','App\Http\Controllers\PersonasController@index')->name('personas.index');
Route::get('personas/crear','App\Http\Controllers\PersonasController@create')->name('persona.create');
Route::get('personas/{persona}/editar','App\Http\Controllers\PersonasController@edit')->name('personas.edit');
Route::patch('personas/{persona}','App\Http\Controllers\PersonasController@update')->name('personas.update');
Route::post('personas', 'App\Http\Controllers\PersonasController@store')->name('personas.store');
Route::get('personas/{persona}','App\Http\Controllers\PersonasController@show')->name('persona.show');
Route::delete('personas/{persona}','App\Http\Controllers\PersonasController@destroy')->name('personas.destroy');


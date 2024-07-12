<?php

use Illuminate\Support\Facades\Route;

Route::view('/','home')->name('home');
Route::view('ingreso','ingreso')->name('ingreso');

Route::get('alumnos','App\Http\Controllers\AlumnosController@index')->name('alumnos.index');
Route::get('alumnos/{id}','App\Http\Controllers\AlumnosController@show')->name('alumnos.show');

Route::resource('alumnos','App\Http\Controllers\AlumnosController');
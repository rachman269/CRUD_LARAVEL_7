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

Route::get('/', 'HomeController@index');
Route::get('/home', 'HomeController@index');

Route::get('/mahasiswa', 'MahasiswaController@index');

Route::get('/student', 'StudentsController@index');
Route::get('/student/create', 'StudentsController@create');
Route::get('/student/{student}', 'StudentsController@show');
Route::post('/student', 'StudentsController@store');
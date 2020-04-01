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

Route::get('/student', 'StudentController@index')->name('student.index');
Route::get('/student/create', 'StudentController@create')->name('student.create');
Route::post('/student/store', 'StudentController@store')->name('student.store');
Route::get('/student/edit/{id}', 'StudentController@edit')->name('student.edit');
Route::post('/student/update/{id}', 'StudentController@update')->name('student.update');
Route::get('/student/delete/{id}','StudentController@destroy')->name('student.destroy');

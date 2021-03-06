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
Route::get('info', 'StudentController@info');
Route::get('orm', 'StudentController@orm');
Route::get('orm2', 'StudentController@orm2');
Route::get('orm3', 'StudentController@orm3');
Route::get('section', 'StudentController@section1');
Route::get('/', function () {
    return view('welcome');
});

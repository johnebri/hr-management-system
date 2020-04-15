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
});

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Route::get('/employees', 'EmployeeController@create');
Route::post('/employees', 'EmployeeController@store');
Route::get('/showemployees', 'EmployeeController@showAll');
Route::get('/employees/{employee}/edit', 'EmployeeController@edit');
Route::patch('/employees/{employee}/edit', 'EmployeeController@update');
Route::get('/employees/{employee}/delete', 'EmployeeController@delete');
Route::delete('/employees/{employee}/delete', 'EmployeeController@destroy');


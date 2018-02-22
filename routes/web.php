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

Route::get('/company', 'CompanyController@index');
Route::get('/create', 'CompanyController@create');
Route::post('/company', 'CompanyController@store');
Route::get('/company/{id}', 'CompanyController@show');



Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
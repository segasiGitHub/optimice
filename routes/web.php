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

Route::get('/create', 'CompanyController@create');
/*Route::get('/company', 'CompanyController@index');
Route::post('/company', 'CompanyController@store');
Route::get('/company/{id}', 'CompanyController@show');
*/
Route::prefix('/company')->group(function () {
    Route::get('/', 'CompanyController@index');
    Route::post('/', 'CompanyController@store');
    Route::get('/{company}', 'CompanyController@show');
    Route::get('/edit/{company}', 'CompanyController@edit');
});

Auth::routes();

Route::get('/home', 'CompanyController@index')->name('home');




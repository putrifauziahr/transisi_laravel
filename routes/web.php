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

//Company
Route::get('showCompany', 'CompanyController@index')->name('showCompany');
Route::get('createCompany', 'CompanyController@create')->name('createCompany');
Route::post('postCreateCompany', 'CompanyController@postCreate')->name('postCreateCompany');
Route::get('deleteCompany/{company}', 'CompanyController@delete')->name('deleteCompany');
Route::get('updateCompany/{company}', 'CompanyController@update')->name('updateCompany');
Route::match(['get', 'post'], 'postUpdateCompany/{id_company}', 'CompanyController@postUpdate')->name('postUpdateCompany');

//Employe
Route::get('showEmploye43', 'EmployeController@index')->name('showEmploye');
Route::get('createEmploye', 'EmployeController@create')->name('createEmploye');
Route::post('postCreateEmploye', 'EmployeController@postCreate')->name('postCreateEmploye');
Route::get('deleteEmploye/{Employe}', 'EmployeController@delete')->name('deleteEmploye');
Route::get('updateEmploye/{Employe}', 'EmployeController@update')->name('updateEmploye');
Route::match(['get', 'post'], 'postUpdateEmploye/{id_Employe}', 'EmployeController@postUpdate')->name('postUpdateEmploye');

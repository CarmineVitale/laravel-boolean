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
//Homepage con privacy e faq
Route::get('/', 'StaticpageController@home')->name('static-page.home');
Route::get('/privacy', 'StaticpageController@privacy')->name('static-page.privacy');
Route::get('/faq', 'StaticpageController@faq')->name('static-page.faq');


//PAgina con studenti e dettaglio studenti
Route::get('/students', 'StudentsController@index')->name('students.index');
Route::get('students/show/{slug}', 'StudentsController@show')->name('students.show');
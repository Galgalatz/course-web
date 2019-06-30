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

Route::name('home')->get('/', 'PagesController@home');
Route::name('leads')->post('/', 'LeadController@store');
Route::name('signin')->get('admin', 'PagesController@getSignin');
Route::resource('courses', 'CourseController');
Route::post('admin','PagesController@postSignin');



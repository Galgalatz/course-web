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

Route::get('/', 'PagesController@index')->name('home');
Route::get('show_courses/{page_id}', 'PagesController@show_courses')->name('show_courses');
//Route::post('show_courses/{page_id}', 'PagesController@show_courses')->name('show_courses');

Route::name('leads')->post('/', 'LeadController@store');
Route::resource('courses', 'CourseController');
Route::get('admin','PagesController@admin');


// Authentication Routes...
Route::get('login', 'Auth\LoginController@showLoginForm')->name('login');
Route::post('login', 'Auth\LoginController@login');
Route::post('logout', 'Auth\LoginController@logout')->name('logout');

// Registration Routes...
//Route::get('register', 'Auth\RegisterController@showRegistrationForm')->name('register');
//Route::post('register', 'Auth\RegisterController@register');
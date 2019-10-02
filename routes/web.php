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

Route::get('courses/{page_id}', 'CourseController@index')->name('courses');
Route::get('courses/{page_id}/create', 'CourseController@create')->name('courses.create');
Route::post('courses/{page_id}/store', 'CourseController@store')->name('courses.store');
Route::post('courses/{page_id}/update_position', 'CourseController@update_position')->name('courses.update_position');
Route::get('courses/{page_id}/edit/{id}', 'CourseController@edit')->name('courses.edit');
Route::match(['PUT','PATCH'], 'courses/{page_id}/update/{id}', 'CourseController@update')->name('courses.update');
Route::delete( 'courses/{page_id}/destroy/{id}', 'CourseController@destroy')->name('courses.destroy');
//Route::resource('courses', 'CourseController');


Route::get('emails-tivi', 'TiviController@index')->name('maccabi-tv');
Route::get('emails-tivi/create', 'TiviController@create')->name('maccabi-tv.create');
Route::post('emails-tivi/store', 'TiviController@store')->name('maccabi-tv.store');
Route::delete('emails-tivi/destroy/{id}', 'TiviController@destroy')->name('maccabi-tv.destroy');

// Authentication Routes...
Route::get('login', 'Auth\LoginController@showLoginForm')->name('login');
Route::post('login', 'Auth\LoginController@login');
Route::post('logout', 'Auth\LoginController@logout')->name('logout');

// Registration Routes...
//Route::get('register', 'Auth\RegisterController@showRegistrationForm')->name('register');
//Route::post('register', 'Auth\RegisterController@register');

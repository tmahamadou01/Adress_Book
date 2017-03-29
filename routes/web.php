<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| This file is where you may define all of the routes that are handled
| by your application. Just tell Laravel the URIs it should respond
| to using a Closure or controller method. Build something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

Auth::routes();

Route::get('/', 'HomeController@index');
Route::get('/dashboard', 'HomeController@dashboard')->name('dashboard');

//logout route
Route::get('logout', '\App\Http\Controllers\Auth\LoginController@logout')->name('logout');

/*route de l'admin */

Route::group(['prefix' => 'dashboard', 'middleware' => ['auth']], function () {

    Route::get('/contact/list', '\App\Http\Controllers\Admin\ContactController@contact_list')->name('contact.list');
    Route::get('/contact/add', '\App\Http\Controllers\Admin\ContactController@add')->name('contact.add');
    //Route::get('/users/resend_email_confirmation/{id}', '\App\Http\Controllers\Admin\UserController@resend_email_confirmation')->name('resend_email_confirmation');
});
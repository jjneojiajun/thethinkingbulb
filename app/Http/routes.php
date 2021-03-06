<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the controller to call when that URI is requested.
|
*/

Route::get('/', function () {
    return view('welcome');
});

Route::auth();

Route::get('/register', function(){
    return view('auth.register');
});

Route::get('/admin', function(){
    return view('admin.index');
});


Route::get('/home', 'HomeController@index');

Route::resource('admin/users', 'AdminUsersController');

Route::resource('admin/subjects', 'AdminSubjectsController');

Route::resource('admin/levels', 'AdminLevelsController');

Route::resource('admin/races', 'AdminRacesController');

Route::resource('admin/locations', 'AdminLocationsController');

Route::resource('admin/religions', 'AdminReligionsController');

Route::resource('admin/qualifications', 'AdminQualificationsController');

Route::resource('admin/assignments', 'AdminAssignmentController');


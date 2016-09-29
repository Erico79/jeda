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

// Registration Module
Route::get('/add-masterfile', 'MasterfileController@index');
Route::get('/update-masterfile', 'MasterfileController@update');
Route::get('/all-masterfiles', 'MasterfileController@allMfs');
Route::get('/all-teachers', 'MasterfileController@allTeachers');
Route::get('/all-guardians', 'MasterfileController@allGuardians');
Route::get('/all-students', 'MasterfileController@allStudents');
Route::get('/all-ss', 'MasterfileController@allSS');

// Contact Types Module
Route::resource('contact_types','ContactTypesController');

// Classes Module
Route::get('/manage_form', 'FormsController@index');
Route::post('/manage_stream', 'FormsController@store');
Route::post('/manage_stream/{id}', 'FormsController@update');
Route::delete('/manage_stream/{id}', 'FormsController@destroy');
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
Route::post('/save-mf', 'MasterfileController@store');
Route::post('/update-masterfile', 'MasterfileController@update');
Route::delete('/delete-masterfile', 'MasterfileController@destroy');
Route::get('/all-masterfiles', 'MasterfileController@allMfs');
Route::get('/all-teachers', 'MasterfileController@allTeachers');
Route::get('/all-guardians', 'MasterfileController@allGuardians');
Route::get('/all-students', 'MasterfileController@allStudents');
Route::get('/all-ss', 'MasterfileController@allSS');
Route::resource('contact_types','ContactTypesController');
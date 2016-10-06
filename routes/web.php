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

Route::get('/', 'HomeController@index');

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
<<<<<<< HEAD
Route::resource('contact_types','ContactTypesController');
Route::resource('streams','StreamsController');
=======

// Contact Types Module
Route::resource('contact_types','ContactTypesController');

// Classes Module
Route::get('/class', 'FormsController@index');
Route::post('/add_class', 'FormsController@store');
Route::post('/manage_stream/{id}', 'FormsController@update');
Route::delete('/manage_stream/{id}', 'FormsController@destroy');

Route::resource('contact_types','ContactTypesController');

// subject module
Route::get('/subject', 'SubjectController@index');
Route::post('/add-subject','SubjectController@store');
<<<<<<< HEAD
Route::post('/update-subject','SubjectController@update');
Route::get('/delete-subject/{id}','SubjectController@delete');
Route::get('/subject_data/{subject_id}', 'SubjectController@getSubjectData');
=======
Route::post('/update-subject/{id}','SubjectController@update');
Route::get('/delete-subject/{id}','SubjectController@delete');
<<<<<<< HEAD

Auth::routes();

Route::get('/home', 'HomeController@index');
=======
>>>>>>> 20ff68170609129c4d19397900dc5955d9402372
>>>>>>> 7d9c4356ed79b36788ef9bfa1a5e211be2c914c5
>>>>>>> 33ec1c53997f643aceec66c1706685434ba785dc

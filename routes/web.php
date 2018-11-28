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

Route::get('/', 'HomeController@index')->name('home');
// Auth
Route::get('/login', ['as' => 'login', 'uses' => 'SigninController@index']);
Route::get('/register', ['as' => 'register', 'uses' => 'SignupController@index']);
Route::post('/signup', 'SignupController@create');
Route::post('/login', 'SigninController@create');
Route::post('/checkusername','SignupController@checkusername');
Route::post('/checkemail','SignupController@checkemail');

// Wrap Up Account
Route::get('/accounttype', 'AccountController@accounttypeview')->name('accounttype');
Route::get('/avatar', 'AccountController@avatar')->name('accounttype');
Route::post('/avatar', 'AccountController@updateavatar');
Route::get('/cover', 'AccountController@cover')->name('accounttype');
Route::post('/cover', 'AccountController@updatecover');
Route::get('/modelshoot', 'ModelsController@shoot')->name('accounttype');
Route::post('/modelshoot', 'ModelsController@updateshoots');
Route::get('/accounteducation', 'AccountController@accounteducation')->name('accounttype');
Route::post('/accounteducation', 'AccountController@posteducation');
Route::get('/deleteeducation/{id}', 'AccountController@deleteeducation');
Route::get('/accountwork', 'AccountController@accountwork')->name('accounttype');
Route::post('/accountwork', 'AccountController@postwork');
Route::get('/deletework/{id}', 'AccountController@deletework');
Route::get('/accountcertificate', 'AccountController@accountcert')->name('accounttype');
Route::post('/accountcertificate', 'AccountController@postcert');
Route::get('/deletecertificate/{id}', 'AccountController@deletecert');
Route::get('/accountpageant', 'AccountController@accountpageant')->name('accounttype');
Route::post('/accountpageant', 'AccountController@postpageant');
Route::get('/deletepageant/{id}', 'AccountController@deletepageant');
Route::post('/createmodel', 'ModelsController@create');
Route::post('/createmember', 'MembersController@create');

// All Ajax
Route::get('/showeducation', 'AccountController@showeducation');
Route::get('/showcertification', 'AccountController@showcertification');
Route::get('/showwork', 'AccountController@showwork');
Route::get('/showpageant', 'AccountController@showpageant');


Route::get('/logout', 'SigninController@destroy');

// Setings
Route::get('/settings', 'SettingsController@index')->name('settings');
Route::post('/updateaccount', 'SettingsController@update');
Route::post('/updatesecurity', 'SettingsController@password');
Route::post('/updatemember', 'MembersController@updatemember');
Route::post('/updatemodel', 'ModelsController@updatemodel');

Route::get('/error', 'ErrorsController@error')->name('accounttype');
// Profile
Route::get('/profileeducation/{id}', 'ProfileController@showeducation');
Route::get('/profilecertification/{id}', 'ProfileController@showcertification');
Route::get('/profilework/{id}', 'ProfileController@showwork');
Route::get('/profilepageant/{id}', 'ProfileController@showpageant');
Route::post('/profileavatar', 'ProfileController@updateavatar');
Route::post('/profilecover', 'ProfileController@updatecover');
Route::get('/{profile}', 'ProfileController@showprofile');
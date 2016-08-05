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

Route::get('/', ['as'=>'index', 'uses'=>'Site\HomeController@index']);
Route::get('/institucional', ['as'=>'about-us', 'uses'=>'Site\CompanyController@index']);
Route::get('/cursos-para-voce', ['as'=>'courses', 'uses'=>'Site\CoursesController@index']);
Route::get('/calendario-de-cursos', ['as'=>'calendars', 'uses'=>'Site\CalendarsController@index']);

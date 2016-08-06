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

/**
 * Frontend (site) routes.
 */
Route::get('/', ['as'=>'index', 'uses'=>'Site\HomeController@index']);
Route::get('/institucional', ['as'=>'about-us', 'uses'=>'Site\CompanyController@index']);
Route::get('/cursos-para-voce', ['as'=>'courses', 'uses'=>'Site\CoursesController@index']);
Route::get('/curso/{slug}', ['as'=>'course-details', 'uses'=>'Site\CoursesController@details']);
Route::get('/calendario-de-cursos', ['as'=>'calendars', 'uses'=>'Site\CalendarsController@index']);
Route::get('/fale-conosco', ['as'=>'contact', 'uses'=>'Site\ContactController@index']);

/**
 * Backend Routes.
 */
Route::group(['prefix'=>'backend', 'as'=>'backend::'], function(){
   Route::get('/', ['as'=>'index', 'uses'=>'Backend\BackendController@index']);
   Route::get('/banners', ['as'=>'banners_index', 'uses'=>'Backend\BannersController@index']);
   Route::get('/banners/create', ['as'=>'banners_create', 'uses'=>'Backend\BannersController@create']);
   Route::post('/banners/store', ['as'=>'banners_store', 'uses'=>'Backend\BannersController@store']);
   Route::post('/banners/update', ['as'=>'banners_update', 'uses'=>'Backend\BannersController@update']);
   Route::get('/banners/{id}/edit', ['as'=>'banners_edit', 'uses'=>'Backend\BannersController@edit']);
   Route::get('/banners/{id}/delete', ['as'=>'banners_delete', 'uses'=>'Backend\BannersController@destroy']);
});
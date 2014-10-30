<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the Closure to execute when that URI is requested.
|
*/


Route::group(['before'=>'guest'], function(){	
	Route::get('login', ['as'=>'login', 'uses'=>'ShowController@showLogin']);
	Route::post('login', ['as'=>'authuser', 'uses'=>'AuthController@authUser']);
	Route::get('/', ['as'=>'home', 'uses'=>'ShowController@showLogin']);
});

Route::group(['before'=>'auth'], function(){


	Route::group(['before'=>'is_basico'], function(){
		Route::get('register',['as'=>'register','uses'=>'ShowController@showRegister']);
		Route::post('register',['as'=>'register','uses'=>'CreateController@createRegister']);
	});

	Route::group(['before'=>'is_experto'], function(){
		Route::get('consultrecords',['as'=>'consultrecords','uses'=>'ShowController@showConsultRecords']);
		Route::get('analytics',['as'=>'analytics','uses'=>'ShowController@showAnalytics']);
	});
	
	Route::group(['before'=>'is_admin'], function(){
		Route::get('managerusers',['as'=>'managerusers','uses'=>'ShowController@showManagerUsers']);

		Route::get('deleteuser/{id}',['as'=>'deleteuser','uses'=>'DeleteController@deleteUser']);
		Route::get('createuser',['as'=>'createuser','uses'=>'ShowController@createUser']);
		Route::post('createuser',['as'=>'createuser','uses'=>'CreateController@createUser']);
		Route::get('updateuser/{id}',['as'=>'updateuser','uses'=>'ShowController@showUpdateUser']);
		Route::post('updateuser',['as'=>'updateuser','uses'=>'UpdateController@updateUser']);
	});

	Route::get('/',['as'=>'home','uses'=>'ShowController@showHome']);
	Route::get('logout', ['as'=>'logout', 'uses'=>'AuthController@logout']);
	Route::get('searchusers', ['as'=>'searchusers', 'uses'=>'UtilsController@searchUsers']);

});


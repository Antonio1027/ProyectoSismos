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
	Route::get('/', ['as'=>'home', 'uses'=>'ShowController@showLogin']);
	Route::post('login', ['as'=>'authuser', 'uses'=>'AuthController@authUser']);
	Route::get('login', ['as'=>'login', 'uses'=>'ShowController@showLogin']);
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
		Route::get('deletedirector/{id}',['as'=>'deletedirector','uses'=>'DeleteController@deleteDirector']);
		Route::get('deleteregistro/{id}',['as'=>'deleteregistro','uses'=>'DeleteController@deleteRegistro']);
		Route::get('createuser',['as'=>'createuser','uses'=>'ShowController@createUser']);
		Route::get('createdirector',['as'=>'createdirector','uses'=>'ShowController@createDirector']);
		Route::post('createuser',['as'=>'createuser','uses'=>'CreateController@createUser']);
		Route::post('createdirector',['as'=>'createdirector','uses'=>'CreateController@createDirector']);
		Route::get('updateuser/{id}',['as'=>'updateuser','uses'=>'ShowController@showUpdateUser']);
		Route::get('updatedirector/{id}',['as'=>'updatedirector','uses'=>'ShowController@showUpdateDirector']);
		Route::post('updateuser',['as'=>'updateuser','uses'=>'UpdateController@updateUser']);
		Route::post('updatedirector',['as'=>'updatedirector','uses'=>'UpdateController@updateDirector']);
		Route::get('updateregistro/{id}',['as'=>'updateregistro','uses'=>'ShowController@showUpdateRegistro']);
		Route::put('updateregistro',['as'=>'updateregistro','uses'=>'UpdateController@updateRegistro']);
	});

	Route::get('/',['as'=>'home','uses'=>'ShowController@showHome']);
	Route::get('logout', ['as'=>'logout', 'uses'=>'AuthController@logout']);
	Route::get('searchusers', [ 'uses'=>'UtilsController@searchUsers']);
	Route::get('searcdirectores', ['uses'=>'UtilsController@searchDirectores']);
	Route::get('searchregistros',['as'=>'searchregistros','uses'=>'UtilsController@searchRegistros']);
	Route::get('searchregistro',['as'=>'searchregistro','uses'=>'UtilsController@searchRegistro']);

});


<?php

Route::group(['middlewareGroups' => ['web']], function (){

	Route::get('contact', 
	  ['as' => 'contact', 'uses' => 'ContactController@create']);
	  
	Route::post('contact', 
	  ['as' => 'contact_store', 'uses' => 'ContactController@store']);
	
	Route::get('/', [
		'as' => '/', 'uses' => 'PagesController@getIndex'
	]);
});
<?php

Route::get('/', 'PagesController@index');

Route::controllers([
	'auth' => 'Auth\AuthController',
	'pass' => 'Auth\PasswordController'
]);



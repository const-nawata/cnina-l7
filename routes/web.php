<?php
use Illuminate\Support\Facades\Route;

Route::match(['get'], '/', 'IndexController@index')
	->name('index')
;

Route::match(['get'], 'userslist', 'UserController@userslist')
	->name('userslist')
;

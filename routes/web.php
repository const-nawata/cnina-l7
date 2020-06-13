<?php
use Illuminate\Support\Facades\Route;

Route::match(['get'], '/{lang}', 'IndexController@index')
	->middleware(\App\Http\Middleware\ProcessLang::class)
	->name('index')
;

Route::match(['get'], 'userslist/{lang}', 'UserController@userslist')
	->middleware(\App\Http\Middleware\ProcessLang::class)
	->name('userslist')
;

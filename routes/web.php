<?php

use Illuminate\Support\Facades\Route;
//use App\Http\Middleware\ProcessLang;

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

//Route::get('/', function () {
//    return view('welcome');
//});

Route::match(['get'], '/{lang}', 'IndexController@index')
	->middleware(\App\Http\Middleware\ProcessLang::class)
	->name('index')
;

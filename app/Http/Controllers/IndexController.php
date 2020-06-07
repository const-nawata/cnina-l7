<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class IndexController extends Controller
{
	public function index(){

		$view_data	= [
			'title'	=> 'Index page',
			'method_name' => 'Index'
		];

		return view( 'pages.index', $view_data );
	}
}

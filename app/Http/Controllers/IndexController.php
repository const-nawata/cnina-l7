<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\App;

class IndexController extends Controller
{
	public function index( Request $request, $lang ){

//		$current_locale = $request->session()->get('current_locale', 'en');

		$view_data	= [
			'title'	=> 'Index page. ',
			'method_name' => 'Index'
		];

		return view( 'pages.index', $view_data );
	}
}

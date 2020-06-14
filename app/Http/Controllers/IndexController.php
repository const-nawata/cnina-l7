<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\App;

class IndexController extends Controller
{
	public function index( Request $request ){

		session(['current_locale' => 'ru']);//TODO: Must be removed after set locale logic implementation.

		$view_data	= [
			'title'	=> 'Index page. ',
			'method_name' => 'Index',
			'shop_name'		=> 'Cont 764'
		];

		return view( 'pages.index', $view_data );
	}
}

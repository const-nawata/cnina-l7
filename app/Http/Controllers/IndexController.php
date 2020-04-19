<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class IndexController extends Controller
{
	public function index(){

//		echo 'Index page.';


		$data	= ['method_name' => 'Index'];

		return view('pages.index', $data);

	}
}

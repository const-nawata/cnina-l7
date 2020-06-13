<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;

class ProcessLang
{
    /**
     * Handle an incoming request.
     *
     * @param  Request  $request
     * @param  Closure  $next
     * @return mixed
     */
    public function handle( $request, Closure $next )
    {
//		$current_locale = session('current_locale', 'en');

		$lang	= $request->route('lang');
		session(['current_locale' => $lang]);

        return $next($request);
    }
}

<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\App;

class SetLocale
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure  $next
     * @return mixed
     */
    public function handle(Request $request, Closure $next)
    {
        //Variable $request->segment(1) will contain our {locale} part of the URL, so we set the app locale on all requests.
        app()->setLocale($request->segment(1));
        // if (session()->has('locale')) {
        //     App::setLocale(session()->get('locale'));
        // }
        return $next($request);
    }
}

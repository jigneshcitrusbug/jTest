<?php

namespace App\Http\Middleware;

use Closure;
use App;

class AdminSettings
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure  $next
     * @return mixed
     */
    public function handle($request, Closure $next)
    {
        App::setLocale(getSession('active_lang'));
        \Carbon\Carbon::setLocale(getSession('active_lang'));
        return $next($request);
    }
}

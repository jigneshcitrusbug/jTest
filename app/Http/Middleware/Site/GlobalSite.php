<?php

namespace App\Http\Middleware\Site;

use App\Projects;
use Closure;
use Illuminate\Support\Facades\View;
use Illuminate\Http\Request;

class GlobalSite
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
         
        $countrys = \Cache::remember('global_countrys', 60*24, function () {
            return \App\Country::select( \DB::raw('CONCAT( phonecode, " - ", name) AS name')  ,'phonecode')->get()->pluck('name','phonecode')->toarray();
        });
        
        View::share('countrys',$countrys);
        
        $response = $next($request);
         
        return $response;
    }
}

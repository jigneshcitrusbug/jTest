<?php

namespace App\Http\Middleware;

use App\Rolls;
use Closure;

class IsAdmin
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
        $auth = \Auth::user();
        $rolls = Rolls::where('admin',1)->get();
        $rolls = $rolls->pluck('id');
        if($auth && $auth->rolls()->whereIn('roll_id',$rolls)->first()){
            return $next($request);
        }else{
            return redirect(route('admin.login'));
        }
        
    }
}

<?php
namespace App\Http\Controllers\Site;
use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Routing\Controller as BaseController;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Illuminate\Http\Request; 
use Illuminate\Support\Facades\Session;
 use Illuminate\Support\Facades\Auth;



class Controller extends BaseController
{
    protected $user;
    use AuthorizesRequests, DispatchesJobs, ValidatesRequests;
 
    public function __construct() {
        
    //    $this->middleware(function ($request, $next) {
    //         $this->user = Auth::user();
    //         $access  = canAccess($this->context,'Access');
    //         if($access !== true){
    //             Session::flash('flash_error',trans('common.responce_msg.access_denied'));
    //             return redirect()->back();
    //         }
    //         return $next($request);
    //    }); 
 
    } 
 
}

<?php

namespace App\Http\Controllers\Site;

use App\Http\Controllers\Site\Controller;
use App\Baners;
use App\Technologies;
use Illuminate\Support\Str;

use Illuminate\Support\Facades\View;
 

use Illuminate\Http\Request; 
// use App\Projects;

class HomeController extends Controller
{ 
    
    public function __construct() {
         
    } 

	public function speedUP(Request $request){ 
		return view('layouts.site.speed');
	}
    public function index(Request $request){ 

        // $banner = Baners::where('slug','home')->first();

        // $technologies =  Technologies::with('technologies_single_main')->where('featured','on')->orderby('ordering')->get();
       \Session::put('pub_form_start',strtotime("now"));
  
       return view('site.index',[
            // 'banner'=>$banner,
            // 'technologies'=>$technologies
        ]);
    }
	
	public function thankYou(Request $request){
		return view('site.thank-you');
	}

    public function clear(Request $request){


        \Artisan::call('cache:clear');
//        \Artisan::call('route:cache');
        \Artisan::call('route:clear');
        \Artisan::call('config:cache');
        \Artisan::call('config:clear');
        \Artisan::call('view:clear');
	//	\Artisan::call('optimize');
		
        return "Cache is cleared";

    }

}

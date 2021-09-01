<?php

namespace App\Http\Controllers\Site;

use App\Http\Controllers\Site\Controller;
use App\Services;
use App\Baners;
use Illuminate\Support\Str;

use Illuminate\Support\Facades\View;
 

use Illuminate\Http\Request; 

class HireProgrammersController extends Controller
{
    
    public function __construct() {
         
    }  

    public function index(Request $request){  

    }

    public function hireTechnology($slug ,Request $request){ 
		if($slug == "hire-python-developers"){
			return view('site-new.static-page.python-developers');
		}
		if($slug == "hire-reactjs-developers"){
			return view('site-new.static-page.reactjs-developers');
		}
		if($slug == "hire-vuejs-developers"){
			return view('site-new.static-page.vuejs-developers');
		}
		if($slug == "hire-angular-developers"){
			return view('site-new.static-page.angular-developers');
		}
		if($slug == "hire-php-developers"){
			return view('site-new.static-page.php-developers');
		}
        
    }

}














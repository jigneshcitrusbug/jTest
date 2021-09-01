<?php

namespace App\Http\Controllers\Site;

use App\Http\Controllers\Site\Controller;
use App\Partners;

use Illuminate\Support\Str;

use Illuminate\Support\Facades\View;
 

use Illuminate\Http\Request; 

class AboutController extends Controller
{
    
    public function __construct() {
         
    } 

    public function index(Request $request){ 
        // $partners = \Cache::remember('Site_Partners', 60*24, function () {
        //     return Partners::where('status','active')->orderBy('ordering','asc')->with('manyfile')->get();
        // });

        $obj = new  \stdClass();
        $obj->title = 'About us';
        $obj->url = route('site.services');
        $breadcrumbs[] = $obj;

        $obj = new  \stdClass();
        $obj->title = 'Home';
        $obj->url = route('site.home');
        $breadcrumbs[] = $obj;

        return view('site.about',[
            // "partners"=> $partners,
            'breadcrumbs'=>$breadcrumbs 
        ]);
    }

}

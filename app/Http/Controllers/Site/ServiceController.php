<?php

namespace App\Http\Controllers\Site;

use App\Http\Controllers\Site\Controller;
use App\Services;
use App\Baners;
use Illuminate\Support\Str;

use Illuminate\Support\Facades\View;
 

use Illuminate\Http\Request; 

class ServiceController extends Controller
{
    
    public function __construct() {
         
    }  

    public function index(Request $request){  

        // $banner = Baners::where('slug','service')->first();

        // $services = Services::get(); 

        $obj = new  \stdClass();
        $obj->title = 'Services';
        $obj->url = route('site.services');
        $breadcrumbs[] = $obj;

        $obj = new  \stdClass();
        $obj->title = 'Home';
        $obj->url = route('site.home');
        $breadcrumbs[] = $obj;
        
        return view('site.services',[
            // 'services'=>$services,
            'breadcrumbs'=>$breadcrumbs,
            // 'banner'=>$banner
        ]);
    }

    public function service($slug ,Request $request){ 
 
        $service = \Cache::remember('site_services_'.$slug, 60*24, function () use ($slug) {
            return Services::with(['servicedetails'])->where('slug',$slug)->first();
        });

        if(!$service){
            abort(404);
        }
        
      
        $obj = new \stdClass();
        $obj->title = $service->title;    
        $obj->url = route('site.service',['slug'=>$service->slug]);
        $breadcrumbs[] = $obj;
        
        $obj = new  \stdClass();
        $obj->title = 'Services';
        $obj->url = route('site.services');
        $breadcrumbs[] = $obj;

        // $obj = new  \stdClass();
        // $obj->title = 'Home';
        // $obj->url = route('site.home');
        // $breadcrumbs[] = $obj;
        
        return view('site.single-service',[
            'service'=>$service ,
            
            'breadcrumbs'=>$breadcrumbs  
        ]);
    }

}

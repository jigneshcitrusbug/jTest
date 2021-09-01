<?php

namespace App\Http\Controllers\Site;

use App\Http\Controllers\Site\Controller;
use App\Projects;
use App\Technologies;
use Illuminate\Support\Str;

use Illuminate\Support\Facades\View;
 

use Illuminate\Http\Request; 

class TechnologyController extends Controller
{
    
    public function __construct() {
         
    } 

    public function index(Request $request){  

        // $technologies = \Cache::remember('Site_Technologies', 60*24, function () {
        //     return Technologies::with('manyfile')->get();
        // });
        // $projects = \Cache::remember('Site_Projects', 60*24, function () {
        //     return Projects::with('manyfile')->get();
        // });

        $obj = new  \stdClass();
        $obj->title = 'Technology';
        $obj->url = route('site.technology');
        $breadcrumbs[] = $obj;

        $obj = new  \stdClass();
        $obj->title = 'Home';
        $obj->url = route('site.home');
        $breadcrumbs[] = $obj;

        return view('site.technology',[
            // 'technologies'=>$technologies,
            // 'projects'=>$projects,
            'breadcrumbs'=>$breadcrumbs 
        ]);
    }

    public function tech( $slug, Request $request){ 

        
        $technology = \Cache::remember('site_technologies_'.$slug, 60*24, function () use ($slug) {
            return Technologies::with(['technologies_multiple_tech'])->where('slug',$slug)->first();
        });

        if(!$technology){
            abort(404);
        }
 

        $obj = new \stdClass();
        $obj->title = $technology->title;    
        $obj->url = route('site.tech',['slug'=>$technology->slug]);
        $breadcrumbs[] = $obj;

        $obj = new  \stdClass();
        $obj->title = 'Technology';
        $obj->url = route('site.technology');
        $breadcrumbs[] = $obj;

        // $obj = new  \stdClass();
        // $obj->title = 'Home';
        // $obj->url = route('site.home');
        // $breadcrumbs[] = $obj;


        return view('site.single-technology',[
            'slug'=>$slug,
            'technology'=>$technology,
            'breadcrumbs'=>$breadcrumbs 
        ]);
    }

}

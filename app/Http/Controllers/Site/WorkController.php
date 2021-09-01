<?php

namespace App\Http\Controllers\Site;

use App\Http\Controllers\Site\Controller;
use App\Services;
use Illuminate\Support\Str;
use App\Projects;
use App\Technologies;

use Illuminate\Support\Facades\View;
 

use Illuminate\Http\Request; 

class WorkController extends Controller
{
    
    public function __construct() {
         
    } 

    public function index(Request $request){ 


        $works = \Cache::remember('site_works_page_3', 60*24, function () {
            return Projects::with(['technologies'])->where('status','1')->orderby('ordering')->get();
        }); 
       
        // $works = Projects::with(['projects_single_main','technologies'])->where('status','1')->orderby('ordering')->get();


        $technologies = \Cache::remember('site_works_technologies', 60*24, function () {
            return Technologies::where('featured','on')->orderby('ordering')->get();
        }); 

        // $technologies = Technologies::with('manyfile')->where('featured','on')->orderby('ordering')->get();
         

        $obj = new  \stdClass();
        $obj->title = 'Works'; 
        $obj->url = route('site.works');
        $breadcrumbs[] = $obj;

        $obj = new  \stdClass();
        $obj->title = 'Home';
        $obj->url = route('site.home');
        $breadcrumbs[] = $obj;


        return view('site.work',[ 

            'technologies'=>$technologies,
            'works'=>$works,
            'breadcrumbs'=>$breadcrumbs 
        ]);
    }

    public function work( $slug, Request $request){ 
        

        

        $work = \Cache::remember('site_work_'.$slug, 60*24, function () use($slug) {
            return Projects::with(['technologies','projects_multiple_images'])->where('slug',$slug)->first();
        }); 
        

        
        if(!$work){
            abort(404);
        }
         

        $obj = new \stdClass();
        $obj->title = $work->title;    
        $obj->url = route('site.work',['slug'=>$work->slug]);
        $breadcrumbs[] = $obj;

       
      

        $obj = new  \stdClass();
        $obj->title = 'Works';
        $obj->url = route('site.works');
        $breadcrumbs[] = $obj;

        // $obj = new  \stdClass();
        // $obj->title = 'Home';
        // $obj->url = route('site.home');
        // $breadcrumbs[] = $obj;

        
 
        
        return view('site.single-work',[
            'work'=>$work,
            'breadcrumbs'=>$breadcrumbs 
        ]);

 
    }

}

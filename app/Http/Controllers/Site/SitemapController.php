<?php

namespace App\Http\Controllers\Site;
use App\Http\Controllers\Site\Controller;
use App\Seos;
use Illuminate\Support\Str;
use Illuminate\Support\Facades\View;

use Illuminate\Http\Request; 
use Illuminate\Support\Facades\Response;

class SitemapController extends Controller
{
    
    public function __construct() {
         
    } 

    public function index(Request $request){ 
        $array = Seos::where('code','200')->where('sitemap','1')->orderby('page_name')->get()->toArray();
       
        $seos =  $this->buildTree($array, 0);
         
       
        
        return view('site.sitemap',[
            'seos'=>$seos,
        ]);
    }


    public function xml(Request $request){ 
		
		$url = url('sitemap.xml');
		return redirect()->away($url);
		
		
        $seos = Seos::where('code','200')->orderby('page_name')->get()->toArray();
        
        
        $output = view('site.sitemapxml',[
            'seos'=>$seos,
        ])->render();
 

        return Response::make($output, '200')->header('Content-Type', 'text/xml');
 

    }
 
    
 
    function buildTree(array $elements, $parentId = 0) {
        $branch = array();
    
        foreach ($elements as $element) {
            if ($element['parent_id'] == $parentId) {
                $children = $this->buildTree($elements, $element['id']);
                if ($children) {
                    $element['children'] = $children;
                }
                $branch[] = $element;
            }
        }
    
        return $branch;
    }
     
 

}

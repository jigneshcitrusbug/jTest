<?php

namespace App\Http\Middleware\Site;

use App\Seos;
use App\Settings;
use Closure;
use Illuminate\Support\Facades\View;
use Illuminate\Http\Request;



class Seo
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
        $url = getSeoUrl($request); 
        
        
         
        $seoLink = \Cache::remember('_seo_link_'.$url, 60*24, function () use ($url) {
            return Seos::with(['seos_single_default','seos_single_facebook','seos_single_twitter','seos_single_linkdin'])->where('url',$url)->first();
        });
 
        $inValidUrlTags = [
            '.js','.css','.png','.jpg', 'media-manager' ,'stylesheets?v', '/datatable?','javascript?v','/admin/','/_debugbar/','/images/'
        ];
        $isinValid = false;
        foreach($inValidUrlTags as $inValidUrlTag){
             
            if(strpos($url,$inValidUrlTag) !== false){
                $isinValid = true;
            }
        }  

        if($isinValid === false  ){
            if(!$seoLink){
                $seoLink = Seos::create([
                    'url'=>$url
                ]);
            }
        }

        if($seoLink){ 
            
            $seo['site_name'] = config('app.name', 'Laravel');
            $seo['url'] = $request->url();
            $seo['fb_admins'] = getSession('fb_admins');     
            $seo['title']= $seoLink->title ? $seoLink->title : '';
            $seo['param']= $seoLink->param;
            $seo['description']= $seoLink->description ? $seoLink->description : '';
            $seo['og_type']= $seoLink->og_type ? $seoLink->og_type : getSession('global_seo_og_type');
            
            $seo['og_image']= @$seoLink->seos_single_default->first()->file_thumb_url ? $seoLink->seos_single_default->first()->file_thumb_url : \URL::to('/')
            .getSession('global_seo_image');
            $seo['og_twitter_image']= @$seoLink->seos_single_twitter->first()->file_thumb_url ? $seoLink->seos_single_twitter->first()->file_thumb_url : \URL::to('/').getSession('global_seo_twitter_image');

            $seo['twitter_card']= $seoLink->twitter_card ? $seoLink->twitter_card : getSession('global_seo_twitter_card');
            View::share('seo',$seo);

            $response = $next($request);
            $seoLink->code =  $response->getstatusCode();
            $tmp = explode("/",$url);

            
            $tmp = array_values(array_filter($tmp));
    
            // foreach($tmp as $k=>$t){
            //     if($t==""){
            //         unset($tmp[$k]);
            //     }
            // }




             
            $parentLink = false;
            if(count($tmp)>0){
                
                $current_page = ucwords(str_replace('-', ' ', $tmp[count($tmp)-1]));
                $seoLink->page_name =  $current_page;

                
                 
                if(count($tmp)>1){
                    $chunk = array_chunk($tmp,count($tmp)-1);
                    $parent_path = '/'.implode("/",$chunk[0]).'/';
                    $parent_path = str_replace('article','blog',$parent_path);
                    $parentLink = Seos::where('url',$parent_path)->first();
                } 
               
                
               
            }
             
            if($parentLink){
                $seoLink->parent_id =  $parentLink->id;
            }else{
                $seoLink->parent_id =  0;
            }

        }        
 
        
        if($seoLink){
            // Perform action after
            if(@$response->exception){
                //add new fields to database for status code and update status code here
                // dd($response->exception);
                if($response->exception->getCode()  != 0  ){
                }
            }
            $seoLink->save();
        }
		$response = $next($request);
        return $response;
    }
}

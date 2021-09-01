<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Admin\Controller;
use Illuminate\Support\Facades\Session;
use Illuminate\Http\Request; 
use Illuminate\Support\Facades\View;
 
use Illuminate\Support\Facades\Cache ;
use App\Services;

class ServicedetailsController extends Controller
{
    public function __construct() {

        
        
        $this->context = str_plural('servicedetails');
        $this->modal = 'App\\'.ucfirst($this->context);
        parent::__construct();
        View::share('context',  $this->context);
        

        

    } 
	 

    // public function store(Request $request)
    // {
    //     $validation = [
    //         'url' => 'required',
    //         'title' => 'required',
    //     ];
	// 	$this->validate($request,$validation);

    //     $input = $request->except(['']);
    //     $item = $this->modal::create($input);
        
    //     if($item){
			 
	// 		if($request->hasFile('og_image'))
	// 		{
	// 			$files = [$request->file('og_image')];
	// 			uploadModalReferenceFile($files,$item,'og_image',[]);
	// 		}
    //         Session::flash('flash_success',trans('common.responce_msg.record_created_succes'));
    //         return redirect()->route('admin.'.$this->context);
    //     }else{
	// 		Session::flash('flash_error',trans('common.responce_msg.something_went_wr'));
	// 		return redirect()->route('admin.'.$this->context);
    //     }

    // }

    // public function update($id, Request $request)
    // {
    //     $varr = [
    //         'url' => 'required',
    //         'title' => 'required',
    //         'description' => 'required',   
    //     ];
	// 	$this->validate($request,$varr,[],[]);
    //     $item = $this->modal::where("id",$id)->first();
    //     $requestData = $request->except(['']);
	// 	if($item){
    //         $item->update($requestData);
			
	// 		if($request->hasFile('og_image'))
	// 		{
	// 			$files = [$request->file('og_image')];
    //             uploadModalReferenceFile($files,$item,'og_image',[],false);
                
	// 		}
    //         Session::flash('flash_success',trans('common.responce_msg.record_updated_succes'));
    //         Cache::pull('_projects_'.$request->url);
	// 	}else{
    //          Session::flash('flash_error',trans('common.responce_msg.something_went_wr'));
	// 	}
    //     return redirect()->route('admin.'.$this->context);  
    // }

    
}

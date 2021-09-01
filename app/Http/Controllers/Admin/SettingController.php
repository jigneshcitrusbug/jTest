<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Admin\Controller;
 
use App\Settings;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\View;
use DataTables;
use Illuminate\Support\Facades\Cache;
use Illuminate\Support\Facades\Input;
use Illuminate\Support\Facades\Session;

class SettingController extends Controller
{
    
    public function __construct() {
        
        $this->context = 'settings';
        $this->modal = 'App\\'.ucfirst($this->context);
        parent::__construct();
        View::share('context',  $this->context); 
        
    } 

    function validationrule(){
        return [];
    } 

    // public function index(Request $request){ 
       
    //     $this->canAccess('View');

    //     // $access  = canAccess($this->context,'View');
    //     // if($access !== true){
    //     //     return $access;
    //     // }
 
       
    //     return view('admin.'.$this->context.'.index',['module'=>$request->module]);
    // }
    // public function create(Request $request)
    // {
    //     $this->canAccess('Add');
    //     return view('admin.'.$this->context.'.create',['module'=>$request->module]);
    // }

    // public function edit($id,Request $request)
    // {  
    //     $this->canAccess('Edit');
    //     $result = array();
    //     $item = $this->modal::findOrFail($id);
    //     if($item){
    //         $result['data'] = $item;
    //         $result['code'] = 200;
    //     }else{
    //         $result['message'] = trans('common.responce_msg.something_went_wr');
    //         $result['code'] = 400;	
	// 		Session::flash('flash_error',trans('common.responce_msg.data_not_found'));
    //         return redirect()->route('admin.'.str_plural($this->context));
    //     }
	// 	if($request->ajax()){
    //         return response()->json($result, $result['code']);
    //     }else{
    //         return view('admin.'.$this->context.'.edit', ['module'=>$request->module,'item'=>$item]);
    //     }
    // }

  

 
    // public function datatable(Request $request) {
        
    //     $record = $this->modal::where("id",">",0);
    //     if($request->has('module') && $request->get('module') != NULL && $request->get('status') != ''){
    //         $record->where("module", $request->module);
    //     }

	// 	if ($request->has('status') && $request->get('status') != 'all' && $request->get('status') != '') {
    //         $record->where('status',$request->get('status'));
    //     }
	// 	if ($request->has('id') && $request->get('id') != '' ) {
    //         $record->where('id',$request->get('id'));
    //     }
	// 	if($request->has('enable_deleted') && $request->enable_deleted == 1){
    //         $record->onlyTrashed();
    //     }
    //     return Datatables::of($record)->make(true);
    // }

 

    public function storeAjax(Request $request){
        
        $setting = Settings::where('fkey',$request->key)->first();
        if($setting){
            $setting->fvalue = $request->value;
            $setting->save();
        }else{
            Settings::create([
                'fkey'=> $request->key,
                'fvalue' => $request->value,
            ]);
        }

        // Cache::forget($request->key);
        // Cache::remember( $request->key , 1440, function () use($request  ) {
                
             
        //         return $request->value;  
            
        // });

         

        setSession($request->key, $request->value);
        return($setting);
    }

    public function setlang($lang){
        $setting = Settings::where('fkey','active_lang')->first();
        if($setting){
            $setting->fvalue = $lang;
            $setting->save();
        }else{
            Settings::create([
                'fkey'=> 'active_lang',
                'fvalue' => $lang,
            ]);
        }
        setSession('active_lang', $lang);
        return back();
    }

    // public function store(Request $request)
    // {
    //     $context = env('APP_KEY');  
    //     $result = array();		
	// 	$varr = [
    //         'title' => 'required',
    //     ];

    //     $input = $request->except(['']);
    //     $item = $this->modal::create($input);
        
    //     if($item){
    //         //session([$context.'.'.$item->fkey => $item->fvalue]);
    //         Cache::forget($item->fkey);
    //         $result['message'] = trans('common.responce_msg.record_created_succes');
    //         $result['code'] = 200;
    //     }else{
    //         $result['message'] = trans('common.responce_msg.something_went_wr');
    //         $result['code'] = 400;
    //     }
    //     if($request->ajax()){
    //         return response()->json($result, $result['code']);
    //     }else{
    //         Session::flash('flash_message',$result['message']);
	// 		if($request->has('previous_url') && $request->previous_url != ""){
	// 			return redirect($request->previous_url);
	// 		}
    //         return redirect()->route('admin.'.str_plural($this->context),['module'=>$request->module]);
    //     }

    // }

    // public function update($id, Request $request)
    // {
    //     $context = env('APP_KEY');  
    //     $result = array();
	// 	//$this->validate($request,$varr,[],trans('issue.label'));
    //     $item = $this->modal::where("id",$id)->first();
        
    //     $requestData = $request->except(['']); 
	// 	if($item){
    //         // session([$context.'.'.$item->fkey => $item->fvalue]);
    //         Cache::forget($item->fkey);
            
            
           

    //         $item->update($requestData);
    //         $result['message'] = trans('common.responce_msg.record_updated_succes');
    //         $result['code'] = 200;
    //     }else{
    //         $result['message'] = trans('common.responce_msg.something_went_wr');
    //         $result['code'] = 400;
    //     }
    //     if($request->ajax()){
    //         return response()->json($result, $result['code']);
    //     }else{
    //         Session::flash('flash_message',$result['message']);
	// 		if($request->has('previous_url') && $request->previous_url != ""){
	// 			return redirect($request->previous_url);
	// 		}
    //         return redirect()->route('admin.'.str_plural($this->context),['module'=>$request->module]);
    //     }   
    // }

}

<?php
namespace App\Http\Controllers\Admin; 

use App\Http\Controllers\Admin\Controller;
use Illuminate\Support\Facades\Session;
use Illuminate\Http\Request; 
use Illuminate\Support\Facades\View;
use Illuminate\Support\Facades\Cache ;
use Illuminate\Support\Facades\Hash;
use App\Libraries\Fields\Text;

class UsersController extends Controller
{
    public function __construct() {
        
        $this->context = str_plural('user');
        $this->modal = "App\\".ucfirst($this->context);
        parent::__construct();
        View::share('context',  $this->context);

    } 

    
    function validationrule(){
 
        return [
            
            'name' => [
                'rule' =>'',
                'message' => [
                    '' => trans($this->context.'.validation.name_'),
                ]
            ],
            
            'email' => [
                'rule' =>'',
                'message' => [
                    '' => trans($this->context.'.validation.email_'),
                ]
            ],
            
            'password' => [
                'rule' =>'',
                'message' => [
                    '' => trans($this->context.'.validation.password_'),
                ]
            ],
            
            'status' => [
                'rule' =>'',
                'message' => [
                    '' => trans($this->context.'.validation.status_'),
                ]
            ],
            
            
        ];
 
    }

    public function store(Request $request)
    {
        
        $result = array();		
		$varr = [
            'title' => 'required',
        ];

        $form_action = $request->action;
        $input = $request->except(['']);
        $input['password'] =  Hash::make($request->password);
        $input['email_verified_at'] =  date('Y-m-d H:i:s');

        $input['status'] = 0;
        if(isset($input['status'])){
            $input['status'] = 1;
        }

        $item = $this->modal::create($input);
        
        if($item){
            $files = $request->file();
            if($files){
                foreach($files as $fkey=>$file){
                    if(is_array($file)){
                        $ufile = $request->file($fkey);    
                        uploadModalReferenceFile($ufile,$item,$request->input($fkey.'_type'),[]);
                    }else{
                        $ufile = [$request->file($fkey)];
                       uploadModalReferenceFile($ufile,$item,$request->input($fkey.'_type'),[],false);
                    }
                }
            }
            $result['message'] = trans('common.responce_msg.record_created_succes');
            $result['code'] = 200;
        }else{
            $result['message'] = trans('common.responce_msg.something_went_wr');
            $result['code'] = 400;
        }
        $this->updatePivot($request, $item) ;
        $this->updateParams($request,$item); 
        \Cache::forget('site_'.$this->context);

        
        
        if($request->ajax()){
            return response()->json($result, $result['code']);
        }else{
            Session::flash('flash_message',$result['message']);
			if($request->has('previous_url') && $request->previous_url != ""){
				return redirect($request->previous_url);
			}
            if($form_action == 'createandclose'){
                return redirect()->route('admin.'.$this->context);
            }
            else if( $form_action == 'createandnew'){
                return redirect()->route('admin.'.$this->context.'.create');
            }else{
                return redirect()->route($this->context.'.edit',['id'=>$item->id]);
            }
        }

    }

    public function update($id, Request $request)
    {
         
        $result = array();
        //dd(trans('issue'));

        $this->validation('edit',$request);
        
        
        
        $item = $this->modal::where("id",$id)->first();
        $requestData = $request->except(['']);

        if($requestData['password'] != ""){
            $requestData['password'] =  Hash::make($request->password);
        }else{
            unset($requestData['password']); 
        }

        $requestData['status'] = 0;
        if(isset($requestData['status'])){
            $requestData['status'] = 1;
        }
        
        $form_action = $request->action;
        
        
		if($item){
            $item->update($requestData);
          
            $files = $request->file();
            if($files){
                foreach($files as $fkey=>$file){
                    if(is_array($file)){
                        $ufile = $request->file($fkey);
                        
                        uploadModalReferenceFile($ufile,$item,$request->input($fkey.'_type'),[]);
                    }else{
                        $ufile = [$request->file($fkey)];
                       uploadModalReferenceFile($ufile,$item,$request->input($fkey.'_type'),[],false);
                    }
                }
            }
            $this->updatePivot($request,$item); 
            $this->updateParams($request,$item); 
            
            \Cache::forget('site_'.$this->context);
             
          
            // if($request->hasFile('images')) 
			// {
			// 	$files = $request->file('images');
			// 	uploadModalReferenceFile($files,$item,'cart_image',[]);
			// }
 
            // if($request->hasFile('image'))
			// {
			// 	$files = [$request->file('image')];
			// 	uploadModalReferenceFile($files,$item,$this->context,[],false);
			// }


            $result['message'] = trans('common.responce_msg.record_updated_succes');
            $result['code'] = 200;
        }else{
            $result['message'] = trans('common.responce_msg.something_went_wr');
            $result['code'] = 400;
        }
        if($request->ajax()){
            return response()->json($result, $result['code']);
        }else{
            Session::flash('flash_message',$result['message']);
			if($request->has('previous_url') && $request->previous_url != ""){
				return redirect($request->previous_url);
            }
           
            if($form_action == 'createandclose'){
                return redirect()->route('admin.'.$this->context);
            }
            else if( $form_action == 'createandnew'){
                return redirect()->route('admin.'.$this->context.'.create');
            }else{
                return redirect()->route($this->context.'.edit',['id'=>$item->id]);
            }
           
        }   
    }
    
	    
}
?>

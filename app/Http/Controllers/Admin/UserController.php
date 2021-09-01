<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Admin\Controller;
use App\Rolls;
use Illuminate\Support\Facades\Session;
use Illuminate\Support\Str;
use Illuminate\Http\Request; 
use Illuminate\Support\Facades\View;
use App\Userrolls;
use Auth;
use Illuminate\Support\Facades\Hash;
use DataTables;

class UserController extends Controller
{
    protected $user;
    public function __construct() {
        
        $this->context = 'user';
        $this->modal = 'App\\'.ucfirst($this->context);
        parent::__construct();
        View::share('context',  $this->context);
        
    } 

    public function datatable(Request $request) {
        
        $is_super_admin = getSess('is_super_admin');
        $roll = Rolls::find(1);
       
       // dd($roll->userrolls->pluck('user_id'));

        $record = $this->modal::where("users.id",">",0);
        
        if($is_super_admin==false &&  $roll){
            $record->whereNotIn("users.id",$roll->userrolls->pluck('user_id'));
            // $record->select('users.*');
            // $record->leftJoin('user_rolls','users.id', '=', 'user_rolls.user_id');
            // $record->leftJoin('rolls','user_rolls.roll_id', '=', 'rolls.id');
            // $record->where('rolls.title','!=','Super Admin');
        }
		if ($request->has('status') && $request->get('status') != 'all' && $request->get('status') != '') {
            $record->where('status',$request->get('status'));
        }
		if ($request->has('id') && $request->get('id') != '' ) {
            $record->where('users.id',$request->get('id'));
        }
		if($request->has('enable_deleted') && $request->enable_deleted == 1){
            $record->onlyTrashed();
        }
        return Datatables::of($record)->make(true);
    }

    
    public function create(Request $request)
    {
        $rolls = Rolls::get();
        return view('admin.'.$this->context.'.create',[
            'rolls'=>$rolls
        ]);
    }


    public function store(Request $request)
    {
        $result = array();		
		$varr = [
            'title' => 'required',
        ];

        $input = $request->except(['']);
        $input['password'] =  Hash::make($request->password);
        $input['email_verified_at'] =  date('Y-m-d H:i:s');
        $item = $this->modal::create($input);

        if($item){
            $rolls = $request->rolls;
            foreach($rolls as $roll){
                Userrolls::create([
                    'user_id' => $item->id,
                    'roll_id' => $roll
                ]);
            }
            $result['message'] = trans('common.responce_msg.record_created_succes');
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
            return redirect()->route('admin.'.$this->context.'s',['id',$item->id]);
        }

    }


    public function edit($id,Request $request)
    {
        $result = array();
        $rolls = Rolls::get();
        $item = $this->modal::findOrFail($id);
        if($item){
            $result['data'] = $item;
            $result['code'] = 200;
        }else{
            $result['message'] = trans('common.responce_msg.something_went_wr');
            $result['code'] = 400;	
			Session::flash('flash_error',trans('common.responce_msg.data_not_found'));
            return redirect()->route('admin.'.$this->context.'s');
        }
		if($request->ajax()){
            return response()->json($result, $result['code']);
        }else{
            return view('admin.'.$this->context.'.edit', compact('item','rolls'));
        }
    }


    public function update($id, Request $request)
    {
         
        $result = array();
		//$this->validate($request,$varr,[],trans('issue.label'));
        $item = $this->modal::where("id",$id)->first();
        $requestData = $request->except(['']);
       
        if($requestData['password'] != ""){
            $requestData['password'] =  Hash::make($request->password);
        }else{
            unset($requestData['password']); 
        }
        
		if($item){
            $item->update($requestData);
            Userrolls::where('user_id',$item->id)->each(function ($item, $key) {
                $item->delete();
            });
            
            $rolls = $request->rolls;
           
            foreach($rolls as $roll){
                Userrolls::create([
                    'user_id' => $item->id,
                    'roll_id' => $roll
                ]);
            }
			
			if($item && $request->has('_base64') && $request->_base64 != "")
			{
				
				if($item->onefile){
					removeRefeImage($item->onefile);
				}
				uploadBase64($request->_base64,$item,'profile',[]);
			}
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
            return redirect()->route('admin.'.$this->context.'s',['id',$item->id]);
        }   
    }

    

}

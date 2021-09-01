<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Admin\Controller; 
    
use Illuminate\Support\Str;

use Illuminate\Support\Facades\View;

use DataTables;

use Illuminate\Http\Request; 

class RollController extends Controller
{
    
    public function __construct() {
        parent::__construct();
        $this->context = 'roll';
        $this->modal = 'App\\'.ucfirst(Str::plural($this->context));
        
        View::share('context',  $this->context);
       
    } 


    public function datatable(Request $request) {
        
        $is_super_admin = getSess('is_super_admin');

        $record = $this->modal::where("id",">",0);
       
        if($is_super_admin == false ){
            $record->where('id','!=',1);
        }
		if ($request->has('status') && $request->get('status') != 'all' && $request->get('status') != '') {
            $record->where('status',$request->get('status'));
        }
		if ($request->has('id') && $request->get('id') != '' ) {
            $record->where('id',$request->get('id'));
        }
		if($request->has('enable_deleted') && $request->enable_deleted == 1){
            $record->onlyTrashed();
        }
        return Datatables::of($record)->make(true);
    }

    
    
}

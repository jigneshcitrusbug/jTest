<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Admin\Controller;
    
use Illuminate\Support\Str;

use Illuminate\Support\Facades\View;
use Illuminate\Http\Request; 
use App\Rolls;
use App\Permissions;
use App\Rollpermissions;
use Illuminate\Support\Facades\Auth;

class RollpermissionsController extends Controller
{
    
    public function __construct() {
        $this->context = 'rollpermission';
        $this->modal = 'App\\'.ucfirst(Str::plural($this->context));
        View::share('context',  $this->context);
      
    } 


    public function index(Request $request){ 
        $this->canAccess('View');
        $is_super_admin = getSess('is_super_admin');
        
        $module = $request->module ? $request->module :  'global';
        if($is_super_admin==false){
            $rolls = Rolls::where('id','!=',1)->get();
        }else{
            $rolls = Rolls::get();
        }
       
        $permissions = Permissions::get();
        $rollpermissions = Rollpermissions::where('module',$module)->get();
 
        return view('admin.'.$this->context.'.index',[
            'module' => $module,
            'rolls' => $rolls,
            'permissions' => $permissions,
            'rollpermissions' => $rollpermissions 
        ]);
    }

    public function updateRollpermissions(Request $request){

        $roll = $request->roll;
        $permission =$request->permission;
        $module = $request->module;
        $check = $request->check;

        $context = env('APP_KEY');
        $fkey = $module.".roll_".$roll.".permission_".$permission;

        $rollpermissions = Rollpermissions::where( 'module',$module)->where( 'roll_id',$roll)->where( 'permission_id',$permission)->first();
        if(!$rollpermissions){
            $rollpermissions =Rollpermissions::create([
                'module' => $module,
                'roll_id' => $roll,
                'permission_id' => $permission,
            ]);
        }
        if($check == 'true'){

            $rollpermissions->value = 1;

            $rollpermissions->update();
             
            session([$context.'.'.$fkey => true]);

        }else{
            $rollpermissions->value = 0;

            $rollpermissions->update();

            session([$context.'.'.$fkey => false]);
        }

         
        //\Cache::forget('user_permission'.Auth::user()->id);
        \Cache::tags(['permission'])->flush();
        return($check);

    }
    

    
}

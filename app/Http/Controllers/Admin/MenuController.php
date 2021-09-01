<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App;
use App\Settings;
use Illuminate\Http\Request;
use App\Rolls;

 
class MenuController extends Controller
{
    
     

    public static function index(){ 

        $rolls = Rolls::get();
 
        return view('admin.menu.index',['rolls'=>$rolls]);
    }


    public function store(Request $request){
        
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
        setSession($request->key, $request->value);
        return($setting);
    }

     

}

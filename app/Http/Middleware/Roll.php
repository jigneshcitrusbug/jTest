<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Support\Facades\Auth;

class Roll
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
        $url = $request->getrequestUri(); 
        if(strpos($url,'/admin/') !== false){
            $validUrls = [
                'login'
            ];
            $isValid = true;
            foreach($validUrls as $validUrl){      
                if(strpos($url,$validUrl) !== false){
                    $isValid = false;
                }
            }  
            if($isValid){
                $auth = Auth::user();
                if($auth){
                    // $permissions =\Cache::tags(['permission'])->remember('user_permission_'.$auth->id, 60*24, function () use ($auth) {
                        $rolls = null;
                        foreach($auth->rolls as $rkey=>$roll){
                            $rollpermissions = $roll->rollpermissions()->get();   
                            //$rolls[$rkey]['roll'] = $roll;
                            foreach($rollpermissions as $pkey=>$rollpermission){
                                $rolls[$roll->roll_id][$rollpermission->module][$rollpermission->permission_id] = $rollpermission->value;
                            }
                        }

                        setSession('permissions',$rolls);
                    //     return $rolls;
                    // });

                    foreach($auth->rolls as $rkey=>$roll){
                        $rollpermissions = $roll->rollpermissions()->get();   
                         
                        foreach($rollpermissions as $pkey=>$rollpermission){
                            $rolls[$roll->roll_id][$rollpermission->module][$rollpermission->permission_id] = $rollpermission->value;
                        }
                    }
                     
                    //setSession('permissions',$permissions);

                    // $is_super_admin = \Cache::remember('user_super_admin_'.$auth->id, 60*24, function () use ($auth) {
                    //     $super_admin = false;
                    //     foreach($auth->rolls as  $roll){
                             
                    //         if($roll->roll->title == "Super Admin"){
                    //             $super_admin = true;
                    //         }
                    //     }
                    //     return $super_admin;
                    // });
                    $is_super_admin = false;
                    foreach($auth->rolls as  $roll){
                             
                        if($roll->roll->title == "Super Admin"){
                            $is_super_admin = true;
                        }
                    }

                     

                    setSession('is_super_admin',$is_super_admin);
                    
                }else{
                    return redirect(route('admin.login'));
                }
            }
        } 
        return $next($request);
    }
}

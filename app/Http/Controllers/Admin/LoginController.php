<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App;
use App\Settings;
use Illuminate\Http\Request;
use App\Rolls;
use App\User;
use Auth;
use Illuminate\Support\Facades\Session;

class LoginController extends Controller
{
    
     

    public static function index(){ 

        return view('admin.login');
    }


    public  function login(Request $request){ 
        
        $request->validate([
            'email' => 'required|email',
            'password' => 'required',
        ]);
        $credentials = $request->only('email', 'password');
        $remember = $request->only('remember');
 
        // $user = User::where('email',$request->email)->first();
        // $user->password = bcrypt($request->password);
        // $user->save();

        // $user = User::create([
        //     'email'=> $request->email,
        //     'password' => bcrypt($request->password)
        // ]);

        if(Auth::attempt($credentials,$remember)){
            return redirect()->route('admin.dashboard');
        }
 
        return redirect()->route('admin.login');
    }


    public function logout(Request $request){

        Auth::logout();
        Session::flush();

        return redirect()->route('admin.login');

    }
    

}

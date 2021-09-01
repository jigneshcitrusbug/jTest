<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;

use App;
 
class DashboardController extends Controller
{
    
    public function __construct()
    {
         
    }

    public static function show(){
        return view('admin.dashboard.index');
    }

}

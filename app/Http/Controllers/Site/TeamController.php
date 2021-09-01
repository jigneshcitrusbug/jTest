<?php

namespace App\Http\Controllers\Site;

use App\Http\Controllers\Site\Controller;
use App\Services;
use App\Teams;
use Illuminate\Support\Str;

use Illuminate\Support\Facades\View;
 

use Illuminate\Http\Request; 

class TeamController extends Controller
{
    
    public function __construct() {
         
    } 

    public function index(Request $request){ 

        $services = Services::get();
        $teams = Teams::orderBy('ordering','asc')->get();
        return view('site.team',[
            'services'=>$services,
            'teams'=>$teams,
        ]);
    }

    public function service(Request $request){ 

        $services = Services::get();
        
        return view('site.about',[
            'services'=>$services
        ]);
    }

}

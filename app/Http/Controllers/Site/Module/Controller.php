<?php
namespace App\Http\Controllers\Site\Module;
use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Routing\Controller as BaseController;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Illuminate\Http\Request; 
use Illuminate\Support\Facades\Session;
use DataTables;
use Illuminate\Support\Facades\Auth;

class Controller extends BaseController
{
    protected $user;
    use AuthorizesRequests, DispatchesJobs, ValidatesRequests;
 
    public function __construct() {
       
    } 

    

}

<?php

namespace App\Http\Controllers\Site\Module;

use App\Http\Controllers\Site\Module\Controller; 

use Illuminate\Support\Str;

use Illuminate\Support\Facades\View;


class Helloworld extends Controller
{
   

    function display(){
        $data['title'] = "Hello World";
        return $data;
    }


    
}

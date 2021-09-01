<?php

namespace App\Http\View\Composers;

use App\Http\Controllers\Site\Module\Helloworld;
use Illuminate\View\View;

class ModuleComposer
{
     
    public function __construct()
    {
        // Dependencies automatically resolved by service container...
        //$this->users = $users;
    }

    
    public function compose(View $view)
    {
        $helloworld = new Helloworld(); 
        $data = ['hello' => $helloworld->display() ];
        $view->with($data);
    }
}
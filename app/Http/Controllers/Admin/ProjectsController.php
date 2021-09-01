<?php

namespace App\Http\Controllers\Admin; 

use App\Http\Controllers\Admin\Controller;
use Illuminate\Support\Facades\Session;
use Illuminate\Http\Request; 
use Illuminate\Support\Facades\View;
use Illuminate\Support\Facades\Cache ;

use App\Libraries\Fields\Text; 

class ProjectsController extends Controller 
{
    public function __construct() {
 
      
        
        $this->context = str_plural('project');
        $this->modal = 'App\\'.ucfirst($this->context);
        parent::__construct();
        View::share('context',  $this->context);
        
    } 

    function validationrule(){
 
        return [
            'title' => [
                'rule' =>'required|max:255',
                'message' => [
                    'required' => trans($this->context.'.validation.title_required'),
                    'max' => "Maximum Limit is 255"
                ],
                'field' => 'Second Name', 
                'apply'=> 'edit' //add , edit, both
            ],
            'desc' => [
                'rule' =>'required',
                'message' => [
                    'required' => "Please Enter Title",
                ],
                'field' =>'Sort Description',
                'apply'=> 'add' 
            ], 
            'description' => [
                'rule' =>'required',
            ], 
        ];
 
    }
	    
}

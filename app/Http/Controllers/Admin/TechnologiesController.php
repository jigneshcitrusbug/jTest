<?php
namespace App\Http\Controllers\Admin; 

use App\Http\Controllers\Admin\Controller;
use Illuminate\Support\Facades\Session;
use Illuminate\Http\Request; 
use Illuminate\Support\Facades\View;
use Illuminate\Support\Facades\Cache ;

use App\Libraries\Fields\Text;

class TechnologiesController extends Controller
{
    public function __construct() {
        
        $this->context = str_plural('technology');
        $this->modal = "App\\".ucfirst($this->context);
        parent::__construct();
        View::share('context',  $this->context);

    } 

    
    function validationrule(){
 
        return [
            
            'title' => [
                'rule' =>'required',
                'message' => [
                    'required' => trans($this->context.'.validation.title_required'),
                ]
            ],
            
            'slug' => [
                'rule' =>'required',
                'message' => [
                    'required' => trans($this->context.'.validation.slug_required'),
                ]
            ],
            
            // 'desc' => [
            //     'rule' =>'required',
            //     'message' => [
            //         'required' => trans($this->context.'.validation.desc_required'),
            //     ]
            // ],
            
            // 'description' => [
            //     'rule' =>'required',
            //     'message' => [
            //         'required' => trans($this->context.'.validation.description_required'),
            //     ]
            // ],
            
            
        ];
 
    }
    
	    
}
?>

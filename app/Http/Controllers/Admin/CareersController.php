<?php
namespace App\Http\Controllers\Admin; 

use App\Http\Controllers\Admin\Controller;
use Illuminate\Support\Facades\Session;
use Illuminate\Http\Request; 
use Illuminate\Support\Facades\View;
use Illuminate\Support\Facades\Cache ;

use App\Libraries\Fields\Text;

class CareersController extends Controller
{
    public function __construct() {
        
        $this->context = str_plural('career');
        $this->modal = "App\\".ucfirst($this->context);
        parent::__construct();
        View::share('context',  $this->context);

    } 

    
    function validationrule(){
 
        return [
            
            'designation' => [
                'rule' =>'',
                'message' => [
                    '' => trans($this->context.'.validation.designation_'),
                ]
            ],
            
            'description_title' => [
                'rule' =>'',
                'message' => [
                    '' => trans($this->context.'.validation.description_title_'),
                ]
            ],
            
            'description' => [
                'rule' =>'',
                'message' => [
                    '' => trans($this->context.'.validation.description_'),
                ]
            ],
            
            'opportunity' => [
                'rule' =>'',
                'message' => [
                    '' => trans($this->context.'.validation.opportunity_'),
                ]
            ],
            
            'position' => [
                'rule' =>'',
                'message' => [
                    '' => trans($this->context.'.validation.position_'),
                ]
            ],
            
            'slug' => [
                'rule' =>'',
                'message' => [
                    '' => trans($this->context.'.validation.slug_'),
                ]
            ],
            
            'work_type' => [
                'rule' =>'',
                'message' => [
                    '' => trans($this->context.'.validation.work_type_'),
                ]
            ],
            
            'status' => [
                'rule' =>'',
                'message' => [
                    '' => trans($this->context.'.validation.status_'),
                ]
            ],
            
            
        ];
 
    }
    
	    
}
?>

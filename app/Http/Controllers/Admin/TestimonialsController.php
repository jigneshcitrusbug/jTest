<?php
namespace App\Http\Controllers\Admin; 

use App\Http\Controllers\Admin\Controller;
use Illuminate\Support\Facades\Session;
use Illuminate\Http\Request; 
use Illuminate\Support\Facades\View;
use Illuminate\Support\Facades\Cache ;

use App\Libraries\Fields\Text;

class TestimonialsController extends Controller
{
    public function __construct() {
        
        $this->context = str_plural('testimonial');
        $this->modal = "App\\".ucfirst($this->context);
        parent::__construct();
        View::share('context',  $this->context);

    } 

    
    function validationrule(){
 
        return [
            
            'name' => [
                'rule' =>'',
                'message' => [
                    '' => trans($this->context.'.validation.name_'),
                ]
            ],
            
            'position' => [
                'rule' =>'',
                'message' => [
                    '' => trans($this->context.'.validation.position_'),
                ]
            ],
            
            'title' => [
                'rule' =>'',
                'message' => [
                    '' => trans($this->context.'.validation.title_'),
                ]
            ],
            
            'description' => [
                'rule' =>'',
                'message' => [
                    '' => trans($this->context.'.validation.description_'),
                ]
            ],
            
            
        ];
 
    }
    
	    
}
?>

<?php
namespace App\Http\Controllers\Admin; 

use App\Http\Controllers\Admin\Controller;
use Illuminate\Support\Facades\Session;
use Illuminate\Http\Request; 
use Illuminate\Support\Facades\View;
use Illuminate\Support\Facades\Cache ;

use App\Libraries\Fields\Text;

class ServicedetailsController extends Controller
{
    public function __construct() {
        
        $this->context = str_plural('servicedetail');
        $this->modal = "App\\".ucfirst($this->context);
        parent::__construct();
        View::share('context',  $this->context);

    } 

    
    function validationrule(){
 
        return [
            
            'title' => [
                'rule' =>'',
                'message' => [
                    '' => trans($this->context.'.validation.title_'),
                ]
            ],
            
            'slug' => [
                'rule' =>'',
                'message' => [
                    '' => trans($this->context.'.validation.slug_'),
                ]
            ],
            
            'desc' => [
                'rule' =>'',
                'message' => [
                    '' => trans($this->context.'.validation.desc_'),
                ]
            ],
            
            'description' => [
                'rule' =>'',
                'message' => [
                    '' => trans($this->context.'.validation.description_'),
                ]
            ],
            
            'services_id' => [
                'rule' =>'',
                'message' => [
                    '' => trans($this->context.'.validation.services_id_'),
                ]
            ],
            
            
        ];
 
    }
    
	    
}
?>

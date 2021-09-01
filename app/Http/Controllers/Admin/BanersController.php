<?php
namespace App\Http\Controllers\Admin; 

use App\Http\Controllers\Admin\Controller;
use Illuminate\Support\Facades\Session;
use Illuminate\Http\Request; 
use Illuminate\Support\Facades\View;
use Illuminate\Support\Facades\Cache ;

use App\Libraries\Fields\Text;

class BanersController extends Controller
{
    public function __construct() {
        
        $this->context = str_plural('baner');
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
            
            'slug' => [
                'rule' =>'',
                'message' => [
                    '' => trans($this->context.'.validation.slug_'),
                ]
            ],
            
            'description' => [
                'rule' =>'',
                'message' => [
                    '' => trans($this->context.'.validation.description_'),
                ]
            ],
            
            'images' => [
                'rule' =>'',
                'message' => [
                    '' => trans($this->context.'.validation.images_'),
                ]
            ],
            
            
        ];
 
    }
    
	    
}
?>

<?php
namespace App\Http\Controllers\Admin; 

use App\Http\Controllers\Admin\Controller;
use Illuminate\Support\Facades\Session;
use Illuminate\Http\Request; 
use Illuminate\Support\Facades\View;
use Illuminate\Support\Facades\Cache ;

use App\Libraries\Fields\Text;

class PartnersController extends Controller
{
    public function __construct() {
        
        $this->context = str_plural('partner');
        $this->modal = "App\\".ucfirst($this->context);
        parent::__construct();
        View::share('context',  $this->context);

    } 

    
    function validationrule(){
 
        return [
            
            'name' => [
                'rule' =>'required|max:255',
                'message' => [
                    'required' => trans($this->context.'.validation.name_required'),

                    'max' => trans($this->context.'.validation.name_max'),
                ]
            ],
            
            'slug' => [
                'rule' =>'required|unique:partners|max:255',
                'message' => [
                    'required' => trans($this->context.'.validation.slug_required'),

                    'unique' => trans($this->context.'.validation.slug_unique'),

                    'max' => trans($this->context.'.validation.slug_max'),
                ]
            ],
            
            'partner_url' => [
                'rule' =>'required',
                'message' => [
                    'required' => trans($this->context.'.validation.partner_url_required'),
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

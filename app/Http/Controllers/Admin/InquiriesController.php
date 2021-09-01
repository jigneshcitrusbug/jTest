<?php
namespace App\Http\Controllers\Admin; 

use App\Http\Controllers\Admin\Controller;
use Illuminate\Support\Facades\Session;
use Illuminate\Http\Request; 
use Illuminate\Support\Facades\View;
use Illuminate\Support\Facades\Cache ;

use App\Libraries\Fields\Text;

class InquiriesController extends Controller
{
    public function __construct() {
        
        $this->context = str_plural('inquiry');
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
            
            'email' => [
                'rule' =>'',
                'message' => [
                    '' => trans($this->context.'.validation.email_'),
                ]
            ],
            
            'phone' => [
                'rule' =>'',
                'message' => [
                    '' => trans($this->context.'.validation.phone_'),
                ]
            ],
            
            'company' => [
                'rule' =>'',
                'message' => [
                    '' => trans($this->context.'.validation.company_'),
                ]
            ],
            
            'message' => [
                'rule' =>'',
                'message' => [
                    '' => trans($this->context.'.validation.message_'),
                ]
            ],
            
            'country_code' => [
                'rule' =>'',
                'message' => [
                    '' => trans($this->context.'.validation.country_code_'),
                ]
            ],
            
            
        ];
 
    }
    
	    
}
?>

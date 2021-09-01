<?php
namespace App\Http\Controllers\Admin; 

use App\Http\Controllers\Admin\Controller;
use Illuminate\Support\Facades\Session;
use Illuminate\Http\Request; 
use Illuminate\Support\Facades\View;
use Illuminate\Support\Facades\Cache ;

use App\Libraries\Fields\Text;

class StudentsController extends Controller
{
    public function __construct() {
        
        $this->context = str_plural('student');
        $this->modal = "App\\".ucfirst($this->context);
        parent::__construct();
        View::share('context',  $this->context);

    } 

    
    function validationrule(){
 
        return [
            
            'name' => [
                'rule' =>'required',
                'message' => [
                    'required' => trans($this->context.'.validation.name_required'),
                ]
            ],
            
            'email' => [
                'rule' =>'required',
                'message' => [
                    'required' => trans($this->context.'.validation.email_required'),
                ]
            ],
            
            'description' => [
                'rule' =>'required',
                'message' => [
                    'required' => trans($this->context.'.validation.description_required'),
                ]
            ],
            
            
        ];
 
    }
    
	    
}
?>

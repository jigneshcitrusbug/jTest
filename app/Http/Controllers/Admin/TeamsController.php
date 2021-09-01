<?php
namespace App\Http\Controllers\Admin; 

use App\Http\Controllers\Admin\Controller;
use Illuminate\Support\Facades\Session;
use Illuminate\Http\Request; 
use Illuminate\Support\Facades\View;
use Illuminate\Support\Facades\Cache ;

use App\Libraries\Fields\Text;

class TeamsController extends Controller
{
    public function __construct() {
        
        $this->context = str_plural('team');
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
            
            'designation' => [
                'rule' =>'required',
                'message' => [
                    'required' => trans($this->context.'.validation.designation_required'),
                ]
            ],
            
            
        ];
 
    }
    
	    
}
?>

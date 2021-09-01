<?php
namespace App\Http\Controllers\Admin; 

use App\Http\Controllers\Admin\Controller;
use Illuminate\Support\Facades\Session;
use Illuminate\Http\Request; 
use Illuminate\Support\Facades\View;
use Illuminate\Support\Facades\Cache ;

use App\Libraries\Fields\Text;

class RollsController extends Controller
{
    public function __construct() {
        
        $this->context = str_plural('roll');
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
            
            'admin' => [
                'rule' =>'',
                'message' => [
                    '' => trans($this->context.'.validation.admin_'),
                ]
            ],
            
            
        ];
 
    }
    
	    
}
?>

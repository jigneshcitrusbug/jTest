<?php
namespace App\Http\Controllers\Admin; 

use App\Http\Controllers\Admin\Controller;
use Illuminate\Support\Facades\Session;
use Illuminate\Http\Request; 
use Illuminate\Support\Facades\View;
use Illuminate\Support\Facades\Cache ;

use App\Libraries\Fields\Text;

class ProductsController extends Controller 
{
    public function __construct() {
        
        $this->context = str_plural('product');
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
            
            'slug' => [
                'rule' =>'required',
                'message' => [
                    'required' => trans($this->context.'.validation.slug_required'),
                ]
            ],
            
            'desc' => [
                'rule' =>'required',
                'message' => [
                    'required' => trans($this->context.'.validation.desc_required'),
                ]
            ],
            
            'price' => [
                'rule' =>'required',
                'message' => [
                    'required' => trans($this->context.'.validation.price_required'),
                ]
            ],
            
            'price_currency' => [
                'rule' =>'required',
                'message' => [
                    'required' => trans($this->context.'.validation.price_currency_required'),
                ]
            ],
            
            
        ];
 
    }
    
}
?>

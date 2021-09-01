<?php
namespace App\Http\Controllers\Admin; 

use App\Http\Controllers\Admin\Controller;
use Illuminate\Support\Facades\Session;
use Illuminate\Http\Request; 
use Illuminate\Support\Facades\View;
use Illuminate\Support\Facades\Cache ;
use DataTables;
use App\Libraries\Fields\Text;

class SeosController extends Controller
{
    public function __construct() {
        
        $this->context = str_plural('seo');
        $this->modal = "App\\".ucfirst($this->context);
        parent::__construct();
        View::share('context',  $this->context);

    }  

    public function datatable(Request $request) {
        
        $record = $this->modal::where("id",">",0);
		if ($request->has('status') && $request->get('status') != 'all' && $request->get('status') != '') {
            $record->where('status',$request->get('status'));
        }
		if ($request->has('id') && $request->get('id') != '' ) {
            $record->where('id',$request->get('id'));
        }
        $record->where('code',200);
		if($request->has('enable_deleted') && $request->enable_deleted == 1){
            $record->onlyTrashed();
        }
        return Datatables::of($record)->make(true);
    }

    
    function validationrule(){
 
        return [
            
            'url' => [
                'rule' =>'',
                'message' => [
                    '' => trans($this->context.'.validation.url_'),
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
            
            'og_type' => [
                'rule' =>'',
                'message' => [
                    '' => trans($this->context.'.validation.og_type_'),
                ]
            ],
            
            'twitter_card' => [
                'rule' =>'',
                'message' => [
                    '' => trans($this->context.'.validation.twitter_card_'),
                ]
            ],
            
            
        ];
 
    }
    
	    
}
?>

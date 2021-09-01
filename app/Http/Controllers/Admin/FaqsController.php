<?php
namespace App\Http\Controllers\Admin; 

use App\Http\Controllers\Admin\Controller;
use Illuminate\Support\Facades\Session;
use Illuminate\Http\Request; 
use Illuminate\Support\Facades\View;
use Illuminate\Support\Facades\Cache ;

use App\Libraries\Fields\Text;

class FaqsController extends Controller
{
    public function __construct() {
        
        $this->context = str_plural('faqs');
        $this->modal = "App\\".ucfirst($this->context);
        parent::__construct();
        View::share('context',  $this->context);

    } 

    
    function validationrule(){
 
        return [
            
            'question' => [
                'rule' =>'required'
            ],
            
            'answer' => [
                'rule' =>'required'
            ],
        ];
 
    }
	public function resetorders(Request $request)
    {
		$ticket = null;
		if($request->has('refe_table_name') && $request->has('refe_field_id') && $request->has('dataarray')){
			foreach($request->dataarray as $k => $val){
				$new_order = ["display_order"=>$val['order']];
				$this->modal::where('refe_field_id',$request->refe_field_id)->where('id',$val['id'])->update($new_order);
			}	
		}
		
		$result['message'] = "Updated";
        $result['code'] = 200;
		return response()->json($result, $result['code']);
	}
    
	    
}
?>

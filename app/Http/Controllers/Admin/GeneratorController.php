<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;

use App;

use Illuminate\Http\Request; 

use Illuminate\Database\Schema\Blueprint;

use Illuminate\Support\Facades\Schema;

use Illuminate\Support\Str;

use Illuminate\Support\Facades\Storage;

class GeneratorController extends Controller
{
    
    public function __construct()
    {
        
    }

    public static function index(){

        $databaseConfig = config('database');
        $database = $databaseConfig['connections'][$databaseConfig['default']]['database'];
        $dTables = \DB::select('SHOW TABLES');
        $tables = [];
        foreach($dTables as $dTable){
            $key = "Tables_in_".$database;
            $tables[$dTable->$key] = $dTable->$key; 
        } 
        return view('admin.generator.index',[
            'tables'=>$tables
        ]);
    }

    public function getfields(Request $request){
        $newtable = $request->newtable;
        $table = $request->table;

        if($newtable){
            if(!Schema::hasTable($newtable)){
                Schema::create($newtable, function (Blueprint $table) {
                    $table->bigIncrements('id');
                    $table->softDeletes(0);
                    $table->timestamps();
                }); 
            }    
            $table = $newtable;
        } 

        $fields = Schema::getColumnListing($table);
        $result['data'] = $fields;
        $result['message'] = trans('common.responce_msg.record_created_succes');
        $result['code'] = 200;
        return response()->json($result, $result['code']);

    }

    public function build(Request $request){
        

        $model = $this->_modelCode($request);

        

        $controller = $this->_controllerCode($request);

        

        $view = $this->_viewCode($request);

        

        $route = $this->_routeCode($request);
        
        return redirect()->route('admin.generator');
        return true;

    }

    public function _routeCode($request){
        $table = $request->table;
        $fileName = $this->_getFileName($table);
        $routename = strtolower($fileName);
        $routePath = base_path('routes/admin.php');
        $routeText = file_get_contents($routePath);
        $routeExplode = \explode("//**GENERATOR_ROUTES**//",$routeText);

        $routeExplode[1] .= 
"
Route::get('/".$routename."/search', '".$fileName."Controller@search');
Route::post('/".$routename."/datatable', '".$fileName."Controller@datatable')->name('admin.".$routename.".datatable');
Route::post('/".$routename."/recover', '".$fileName."Controller@recover')->name('admin.".$routename.".recover');
Route::resource('/".$routename."', '".$fileName."Controller', ['names' => [
    'index' => 'admin.".$routename."',
    'create' => 'admin.".$routename.".create',
    'update' => 'admin.".$routename.".update',
]]);

";
        $routeText = implode("//**GENERATOR_ROUTES**//",$routeExplode);
        file_put_contents($routePath,$routeText);
        return true;
        dd($routeExplode);
    }

    public function _viewCode($request){

        $table = $request->table;
        $folderName = strtolower($this->_getFileName($table));
        
        
        $createFilename = 'create.blade';
        $text = "@extends('admin.system.create')";
        $this->_writeFile(resource_path().'/views/admin/'.$folderName.'/',$createFilename,'.php',$text);


        $editFilename = 'edit.blade';
        $text = "@extends('admin.system.edit')";
        $this->_writeFile(resource_path().'/views/admin/'.$folderName.'/',$editFilename,'.php',$text);


        $formFilename = 'form.blade';
        $text = $this->_formFields($request);
        $this->_writeFile(resource_path().'/views/admin/'.$folderName.'/',$formFilename,'.php',$text);

        


        $indexFilename = 'index.blade';
        $text = $this->_indexFields($request);
        $this->_writeFile(resource_path().'/views/admin/'.$folderName.'/',$indexFilename,'.php',$text);
        


        $showFilename = 'show.blade';
        $text = $this->_showFields($request);
        $this->_writeFile(resource_path().'/views/admin/'.$folderName.'/',$showFilename,'.php',$text); 

        return true;
    }

    public function _showFields($request){
        $listFields =  $request->listFields;
       

        $listText = 
"
@extends('admin.system.show')
@section('table')
    
".
'
<table class="table table-striped">
    <tbody>
      
            ';
            foreach($listFields as $listField){
                $listText .=
'   
        <tr>
            <th>@lang(\''."common.".$listField.'\')</th>
            <td>{{ $item->'.$listField.' }}</td>
        </tr>
';
            }    
             
            $listText .=
'
       
    </tbody>
</table>
@endsection
';  
        
        return $listText; 


    }

    public function _indexFields($request){
        $listFields =  $request->listFields;
        $listText = 
"
@extends('admin.system.index')
@section('fields') 
    @php
".
'
        $fields = [
            ';
            foreach($listFields as $listField){
                if($listField == "ordering"){ 
                    $listText .= 
"
                    'ordering' =>  [
                        'data'=> 'null',
                        'searchable'=> 'false', 
                        'orderable'=> 'true'
                        'render'=> 'function (o) {
                            var order = \"\";
                            order = \"<input style=\'width: 60px;text-align: center;\' type=\'number\' data-id=\''+o.id+'\' class=\'row_ordering\' value=\''+o.ordering+'\' name=\'ordering[]\' id=\'ordering_'+o.id+'\'  />\";   
                            return order;                         
                        }'
                    ],
";
                }else{
                $listText .=
"
                 '".$listField."' => [
                        'data'=> '\"".$listField."\"',
                        'name'=> '\"".$listField."\"',
                        'searchable'=> 'true', 
                        'orderable'=> 'true'
                    ],
";
                }
            }    
            $listText .=
'
        ];
    @endphp
@endsection
';
        return $listText; 
    }

    public function _formFields($request){
       
        $image = $request->image;
        $formFields = $request->formFields;
        $relation = $request->relation;
        $formFieldsType = $request->formFieldsType;
        $formText = 
'<div class="row ">
    <div class="col-md-6">
            ';
            foreach($formFields as $key=>$formField){
                $formText .=
"
            {{ Form::".$formFieldsType[$key]."('".$formField."') }}
";
            }    


            foreach($relation['hasone']['foreign'] as $foreign){
                if($foreign){
                    $formText .=
"
            {{ Form::cbSelect('".$foreign."') }}
";
                }
                
            }

            foreach($relation['belongsToMany']['foreign'] as $key => $foreign){
                if($foreign){
                    $pivot_table = $this->_getFileName($relation['belongsToMany']['pivot_table'][$key]);
                    $relation = strtolower($pivot_table);
                    $formText .=
'
            {{ Form::cbRelationMultipleCheckbox("'.$foreign.'", \App\\'.$pivot_table.'::all()->pluck("title","id") ,"'.$relation.'", @$item, false, true ) }}
';
                }
                
            }

            


            foreach($image['single']['label'] as $singleImage){
                if($singleImage){
                    $formText .=
'
            {{ Form::cbImage("'.$singleImage.'", false , @$item, $context ) }}
';
                }
            }

            foreach($image['multiple']['label'] as $multipleImage){
                if($multipleImage){
                    $formText .=
'
            {{ Form::cbImage("'.$multipleImage.'", true , @$item, $context ) }}
';
                }
            }


            $formText .=            
'
            {{ Form::cbButtons(trans($context.\'.form.create\'), trans($context.\'.form.clear\') ) }}    
    </div>
</div>
';      
 
        
        return $formText;    
        //dd($relation); 
        //dd($formFields);
        //dd($formFieldsType);
    }

    public function _writeFile($path,$filename,$ext,$text){

        \File::exists($path) or mkdir($path, 0777, true);
        $fullPath = $path.$filename.$ext;
        $fullPathRename = $path.$filename.date('-Y-m-d-h-i-s').$ext;
         
        if(file_exists($fullPath)){   
            rename ($fullPath,$fullPathRename);
        } 
        
        $fp = fopen ($fullPath , "w+");
        fwrite($fp, $text);
        fclose($fp);
        return true;
    }

    public function _controllerCode($request){
        $table = $request->table;
        $fileName = $this->_getFileName($table).'Controller';
        
        $controllerText = 
'<?php
namespace App\Http\Controllers\Admin; 

use App\Http\Controllers\Admin\Controller;
use Illuminate\Support\Facades\Session;
use Illuminate\Http\Request; 
use Illuminate\Support\Facades\View;
use Illuminate\Support\Facades\Cache ;

use App\Libraries\Fields\Text;

class '.$fileName.' extends Controller
{
    public function __construct() {
        
        $this->context = str_plural(\''.str_singular($table).'\');
        $this->modal = "App\\\".ucfirst($this->context);
        parent::__construct();
        View::share(\'context\',  $this->context);

    } 

    ';

   
    $controllerText .= $this->_validationRules($request->formFields, $request->formFieldsValidation);
    
    
    $controllerText .='
	    
}
?>
';
 
 
        $path = app_path('Http/Controllers/Admin/'.$fileName.'.php');
        
        $exists = file_exists($path);
        if(file_exists($path)){
            $renamepath = app_path('Http/Controllers/Admin/'.$fileName.date('-Y-m-d-h-i-s').'.php');
            rename ($path,$renamepath);
        }

        $fp = fopen ($path , "w+");

        fwrite($fp, $controllerText);
        fclose($fp);

        return true;

    }

    public function _validationRules($formFields, $formFieldsValidation){

       
        
    $validation = "
    function validationrule(){
 
        return [
            ";
    foreach($formFields as $key => $formField){
        $validation .="
            '".$formField."' => [
                'rule' =>'".$formFieldsValidation[$key]."',
                'message' => [";
                $validation .=$this->_validationRulesMessage($formFieldsValidation[$key],$formField);
                $validation .= 
"                ]
            ],
            ";
    }                
    $validation .= 
"
            
        ];
 
    }
    ";
    return $validation;
    }

    public function _validationRulesMessage($formFieldsValidation,$formField){

        $pipseprates = explode('|',$formFieldsValidation);
       
        $message = "";
        foreach($pipseprates as $key => $pipseprate){
            $colseprate = explode(':',$pipseprate);
            $rull = $colseprate[0];
            $message .= 
"
                    '".$rull."' => trans(".'$this->context'.".'.validation.".$formField."_".$rull."'),
";
        }
        return $message;
    }

    public function _modelCode(Request $request){
        $table = $request->table;
        $fields = $request->fields;
        $relation = $request->relation;

        $fileName = $this->_getFileName($table);

        $modelText = 
'<?php
    namespace App;
    use App\BaseModel;
    class '.$fileName.' extends BaseModel
    {
        //declare Tabel Name
        protected $table = "'.$table.'";
    ';
    $modelText .= $this->_getFillable($fields);
    $modelText .= $this->_relation_hasone($relation['hasone']);
    $modelText .=' 
    }
?>';
     
        $path = app_path($fileName.'.php');

        $exists = file_exists($path);
        if(file_exists($path)){
            $renamepath = app_path($fileName.date('-Y-m-d-h-i-s').'.php');
            rename ($path,$renamepath);
        }

        $fp = fopen ($path , "w+");

        fwrite($fp, $modelText);
        fclose($fp);
       
       return true; 
    }
    public function _getFillable($fields){
        return '
            //declare Fillable Variable
            protected $fillable = [
                \''.implode("','",$fields).'\' 
            ];
        ';
    }
    public function _getFileName($text){
        $plural = Str::plural($text);
        return ucfirst($plural);
    }

    public function _relation_hasone($data){
        $modal = $data['modal'];
        $l = $data['local'];
        $f = $data['foreign'];

        $output = "";
        foreach($modal as $k => $m){
            if($m){
            $modalName = $this->_getFileName($m);    
            $output .= '
            public function '.strtolower($m).'(){
                return $this->hasone("App\\'.$modalName.'", "'.$f[$k].'", "'.$l[$k].'");
            }
            ';
            }
            
        }
        
        return $output;

        dd($output);
    }

}

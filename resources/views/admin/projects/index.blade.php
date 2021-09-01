@extends('admin.system.index')


@section('fields') 

    @php
        
        $fields = [
                    
                    // 'id' => [
                    //     "data"=> '"id"',
                    //     "name"=> '"id"',
                    //     "searchable"=> "true", 
                    //     "orderable"=> "true"
                    // ],
                    'title' => [
                        "data"=> "null",
                        "name"=> '"title"',
                        "searchable"=> "true", 
                        "orderable"=> "true" ,
                        "render"=>"function (o) {return '<a href=\"'+edit_url+'/'+o.id+'/edit\" value='+o.id+' data-id='+o.id+' title=\"".__("tooltip.common.icon.edit")."\" >'+o.title+'</a>'}",
                    ],
                    'slug' => [
                        "data"=> '"slug"',
                        "name"=> '"slug"',
                        "searchable"=> "true", 
                        "orderable"=> "true"
                    ],
                    'created' => [
                        "data"=> "null",
                        "name"=> '"created_at"',
                        "searchable"=> "false",
                        "orderable"=> "true",
                        "render" => "function (o) {return o.created_humans;}"
                    ],

                    'status' => [
                        'data'=> '"status"',
                        'name'=> '"status"', 
                        'searchable'=> 'true', 
                        'orderable'=> 'true'
                    ],

                    'ordering' =>  [
                        "data"=> "null",
                        "searchable"=> "false",
                        "orderable"=> "false",
                        
                        "render"=> "function (o) {
                        
                            var order = '';

                            order = '<input style=\'width: 60px;text-align: center;\' type=\'number\' data-id=\''+o.id+'\' class=\'row_ordering\' value=\''+o.ordering+'\' name=\'ordering[]\' id=\'ordering_'+o.id+'\'  />';

                            
                            return order;	
                            
                        }"
                    ],
                    
                    // 'action' => [
                    //     "data"  => "null",
                    //     "searchable" => "false",
                    //     "orderable" => "false",
                    //     "width" => "150",
                    //     "render" =>"function (o) { var e=''; var v=''; var d='';
                    //                 v = 'Malkesh <a href='+edit_url+'/'+o.id+' value='+o.id+' data-id='+o.id+' ><button class=\"btn btn-info btn-sm\" title=\"".__("tooltip.common.icon.eye")."\" ><i class=\"fa fa-eye\" ></i></button></a>';
                    //                 e ='';
                    //                 d = '<a href=\"javascript:void(0);\" class=\"btn btn-danger btn-sm del-log\" title=\"".__("tooltip.common.icon.delete")."\"  data-id='+o.id+' ><i class=\"fa fa-trash\" aria-hidden=\"true\"></i></a>';
                    //                 if(o.deleted_at && o.deleted_at!=''){
                    //                     return '<a href=\"javascript:void(0);\" class=\"recover-item btn btn-info btn-sm\" data-id='+o.id+' title=\"".__("common.label.recover")."\"><i class=\"fa fa-repeat\"></i></a>' + d;
                    //                 }else{
                    //                     return v+e+d;	
                    //                 }
                    //             }",
                    // ]
                ];

    
    @endphp

@endsection
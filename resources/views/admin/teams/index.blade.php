
@extends('admin.system.index')
@section('fields') 
    @php

        $fields = [
     
            
            'name' => [
                'data'=> '"name"',
                'name'=> '"name"',
                'searchable'=> 'true', 
                'orderable'=> 'true'
            ],

            'designation' => [
                'data'=> '"designation"',
                'name'=> '"designation"',
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

        ];
    @endphp
@endsection

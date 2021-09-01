
@extends('admin.system.index')
@section('fields') 
    @php

        $fields = [
     
            
            'title' => [
                'data'=> '"title"',
                'name'=> '"title"',
                'searchable'=> 'true', 
                'orderable'=> 'true'
            ],

            'slug' => [
                'data'=> '"slug"',
                'name'=> '"slug"',
                'searchable'=> 'true', 
                'orderable'=> 'true'
            ],

            'featured' => [
                'data'=> '"featured"',
                'name'=> '"featured"',
                'searchable'=> 'false', 
                'orderable'=> 'false'
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

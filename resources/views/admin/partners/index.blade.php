
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

                 'slug' => [
                        'data'=> '"slug"',
                        'name'=> '"slug"',
                        'searchable'=> 'true', 
                        'orderable'=> 'true'
                    ],

                   

                 'partner_url' => [
                        'data'=> '"partner_url"',
                        'name'=> '"partner_url"',
                        'searchable'=> 'true', 
                        'orderable'=> 'true'
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

        ];
    @endphp
@endsection

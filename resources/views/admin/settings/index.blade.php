@extends('admin.system.index')


@section('fields')

    @php
        
        $fields = [ 
                    
                   
                    'fkey' => [
                        "data"=> "null",
                        "name"=> '"fkey"',
                        "searchable"=> "true", 
                        "orderable"=> "true" ,
                        "render"=>"function (o) {return '<a href=\"'+edit_url+'/'+o.id+'/edit\" value='+o.id+' data-id='+o.id+' title=\"".__("tooltip.common.icon.edit")."\" >'+o.fkey+'</a>'}",
                    ],
                    
                    'created' => [
                        "data"=> "null",
                        "name"=> '"created_at"',
                        "searchable"=> "false",
                        "orderable"=> "true",
                        "render" => "function (o) {return o.created_humans;}"
                    ],

                   
                ];

    
    @endphp

@endsection
 
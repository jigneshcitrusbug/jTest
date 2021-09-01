
@extends('admin.system.index')
@section('fields') 
    @php

        $fields = [
            
                
                 'url' => [
                        'data'=> '"url"',
                        'name'=> '"url"',
                        'searchable'=> 'true', 
                        'orderable'=> 'true'
                    ],

                'code' => [
                        'data'=> '"code"',
                        'name'=> '"code"',
                        'searchable'=> 'true', 
                        'orderable'=> 'true'
                    ],

                 

        ];
    @endphp
@endsection

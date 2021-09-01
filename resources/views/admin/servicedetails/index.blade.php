
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

                 'services_id' => [
                        'data'=> '"services_id"',
                        'name'=> '"services_id"',
                        'searchable'=> 'true', 
                        'orderable'=> 'true'
                    ],

        ];
    @endphp
@endsection

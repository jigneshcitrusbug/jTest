
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

                 'tech_id' => [
                        'data'=> '"tech_id"',
                        'name'=> '"tech_id"',
                        'searchable'=> 'true', 
                        'orderable'=> 'true'
                    ],

        ];
    @endphp
@endsection

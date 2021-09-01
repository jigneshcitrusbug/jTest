
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

                 'email' => [
                        'data'=> '"email"',
                        'name'=> '"email"',
                        'searchable'=> 'true', 
                        'orderable'=> 'true'
                    ],
                 'phone' => [
                        'data'=> '"phone"',
                        'name'=> '"phone"',
                        'searchable'=> 'true', 
                        'orderable'=> 'true'
                    ],

                 'country_code' => [
                        'data'=> '"country_code"',
                        'name'=> '"country_code"',
                        'searchable'=> 'true', 
                        'orderable'=> 'true'
                    ],

                    'ip' => [
                        'data'=> '"ip"',
                        'name'=> '"ip"',
                        'searchable'=> 'true', 
                        'orderable'=> 'true'
                    ],

                    'page' => [
                        'data'=> '"page"',
                        'name'=> '"page"',
                        'searchable'=> 'true', 
                        'orderable'=> 'true'
                    ],

                    

        ];
    @endphp
@endsection

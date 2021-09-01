
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

                 'status' => [
                        'data'=> '"status"',
                        'name'=> '"status"',
                        'searchable'=> 'true', 
                        'orderable'=> 'true'
                    ],

        ];
    @endphp
@endsection

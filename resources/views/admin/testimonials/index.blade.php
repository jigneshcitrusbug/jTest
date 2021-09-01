
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

                 'position' => [
                        'data'=> '"position"',
                        'name'=> '"position"',
                        'searchable'=> 'true', 
                        'orderable'=> 'true'
                    ],

                 'title' => [
                        'data'=> '"title"',
                        'name'=> '"title"',
                        'searchable'=> 'true', 
                        'orderable'=> 'true'
                    ],

        ];
    @endphp
@endsection

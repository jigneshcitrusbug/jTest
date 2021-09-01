
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

        ];
    @endphp
@endsection

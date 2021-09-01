
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

                 'icon' => [
                        'data'=> '"icon"',
                        'name'=> '"icon"',
                        'searchable'=> 'true', 
                        'orderable'=> 'true'
                    ],

                 'display_order' => [
                        'data'=> '"display_order"',
                        'name'=> '"display_order"',
                        'searchable'=> 'true', 
                        'orderable'=> 'true'
                    ],

        ];
    @endphp
@endsection

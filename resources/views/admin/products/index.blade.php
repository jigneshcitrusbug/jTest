
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

            'price' => [
                'data'=> '"price"',
                'name'=> '"price"',
                'searchable'=> 'true', 
                'orderable'=> 'true'
            ],

            'price_currency' => [
                'data'=> '"price_currency"',
                'name'=> '"price_currency"',
                'searchable'=> 'true', 
                'orderable'=> 'true'
            ],

        ];
    @endphp
@endsection

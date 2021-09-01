
@extends('admin.system.show')
@section('table')
    

<table class="table table-striped">
    <tbody>
      
               
        <tr>
            <th>@lang('common.name')</th>
            <td>{{ $item->name }}</td>
        </tr>
   
        <tr>
            <th>@lang('common.email')</th>
            <td>{{ $item->email }}</td>
        </tr>
   
        <tr>
            <th>@lang('common.ordering')</th>
            <td>{{ $item->ordering }}</td>
        </tr>
   
        <tr>
            <th>@lang('common.phone')</th>
            <td>{{ $item->phone }}</td>
        </tr>
   
        <tr>
            <th>@lang('common.country_code')</th>
            <td>{{ $item->country_code }}</td>
        </tr>

       
    </tbody>
</table>
@endsection

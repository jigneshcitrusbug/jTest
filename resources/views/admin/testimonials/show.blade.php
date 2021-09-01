
@extends('admin.system.show')
@section('table')
    

<table class="table table-striped">
    <tbody>
      
               
        <tr>
            <th>@lang('common.name')</th>
            <td>{{ $item->name }}</td>
        </tr>
   
        <tr>
            <th>@lang('common.position')</th>
            <td>{{ $item->position }}</td>
        </tr>
   
        <tr>
            <th>@lang('common.title')</th>
            <td>{{ $item->title }}</td>
        </tr>

       
    </tbody>
</table>
@endsection


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
            <th>@lang('common.status')</th>
            <td>{{ $item->status }}</td>
        </tr>

       
    </tbody>
</table>
@endsection

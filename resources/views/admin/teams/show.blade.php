
@extends('admin.system.show')
@section('table')
    

<table class="table table-striped">
    <tbody>
      
               
        <tr>
            <th>@lang('common.name')</th>
            <td>{{ $item->name }}</td>
        </tr>
   
        <tr>
            <th>@lang('common.designation')</th>
            <td>{{ $item->designation }}</td>
        </tr>
   
        <tr>
            <th>@lang('common.ordering')</th>
            <td>{{ $item->ordering }}</td>
        </tr>

       
    </tbody>
</table>
@endsection

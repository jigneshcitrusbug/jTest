
@extends('admin.system.show')
@section('table')
    

<table class="table table-striped">
    <tbody>
      
               
        <tr>
            <th>@lang('common.designation')</th>
            <td>{{ $item->designation }}</td>
        </tr>
   
        <tr>
            <th>@lang('common.position')</th>
            <td>{{ $item->position }}</td>
        </tr>
   
        <tr>
            <th>@lang('common.ordering')</th>
            <td>{{ $item->ordering }}</td>
        </tr>
   
        <tr>
            <th>@lang('common.work_type')</th>
            <td>{{ $item->work_type }}</td>
        </tr>
   
        <tr>
            <th>@lang('common.status')</th>
            <td>{{ $item->status }}</td>
        </tr>

       
    </tbody>
</table>
@endsection

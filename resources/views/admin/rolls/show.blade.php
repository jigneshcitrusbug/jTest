
@extends('admin.system.show')
@section('table')
    

<table class="table table-striped">
    <tbody>
      
               
        <tr>
            <th>@lang('common.title')</th>
            <td>{{ $item->title }}</td>
        </tr>
   
        <tr>
            <th>@lang('common.admin')</th>
            <td>{{ $item->admin }}</td>
        </tr>

       
    </tbody>
</table>
@endsection

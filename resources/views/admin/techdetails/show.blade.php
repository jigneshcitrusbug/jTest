
@extends('admin.system.show')
@section('table')
    

<table class="table table-striped">
    <tbody>
      
               
        <tr>
            <th>@lang('common.title')</th>
            <td>{{ $item->title }}</td>
        </tr>
   
        <tr>
            <th>@lang('common.tech_id')</th>
            <td>{{ $item->tech_id }}</td>
        </tr>

       
    </tbody>
</table>
@endsection

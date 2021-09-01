
@extends('admin.system.show')
@section('table')
    

<table class="table table-striped">
    <tbody>
      
               
        <tr>
            <th>@lang('common.name')</th>
            <td>{{ $item->name }}</td>
        </tr>
   
        <tr>
            <th>@lang('common.slug')</th>
            <td>{{ $item->slug }}</td>
        </tr>

       
    </tbody>
</table>
@endsection

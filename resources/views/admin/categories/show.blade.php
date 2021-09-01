
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
   
        <tr>
            <th>@lang('common.icon')</th>
            <td>{{ $item->icon }}</td>
        </tr>
   
        <tr>
            <th>@lang('common.display_order')</th>
            <td>{{ $item->display_order }}</td>
        </tr>

       
    </tbody>
</table>
@endsection

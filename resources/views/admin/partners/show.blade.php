
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
            <th>@lang('common.ordering')</th>
            <td>{{ $item->ordering }}</td>
        </tr>
   
        <tr>
            <th>@lang('common.partner_url')</th>
            <td>{{ $item->partner_url }}</td>
        </tr>
   
        <tr>
            <th>@lang('common.status')</th>
            <td>{{ $item->status }}</td>
        </tr>

       
    </tbody>
</table>
@endsection

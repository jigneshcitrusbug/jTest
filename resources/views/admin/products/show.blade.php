
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
            <th>@lang('common.price')</th>
            <td>{{ $item->price }}</td>
        </tr>
   
        <tr>
            <th>@lang('common.price_currency')</th>
            <td>{{ $item->price_currency }}</td>
        </tr>

       
    </tbody>
</table>
@endsection

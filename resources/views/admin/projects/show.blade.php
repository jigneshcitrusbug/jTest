@extends('admin.system.show')
 
@section('table')
<table class="table table-striped">
    <tbody>
        <tr>
            <th>#ID</th>
            <td>{{ $item->id }}</td>
        </tr>
        <tr>
            <th>@lang('common.title')</th>
            <td>{{ $item->name }}</td>
        </tr>
        <tr>
            <th>Description</th>
            <td>{{ $item->desc }}</td>
        </tr>
        <tr>
            <th>Price</th>
            <td>{{ $item->price }}  @lang('seos.currency.'.$item->price_currency.'.symbole')</td>
        </tr>
        <tr>
            <th>Category</th>
            <td>@if($item->category) {{$item->category->name}} @else {{ $item->category_id }} @endif  </td>
        </tr>
        <tr>
            <th>Created </th>
            <td>{{ $item->created_formated }} </td> 
        </tr>
        <tr>
            <th>Cart Images </th>
            <td>
            @if(isset($item) && $item->manyfile->where('file_type','cart_image')->count())
                @include("layouts.admin.shared.files",['refefile'=>$item->manyfile->where('file_type','cart_image')])
                @endif
            </td>  
        </tr>
        <tr>
            <th>Base Image </th>
            <td>@if(isset($item) && $item->manyfile->where('file_type','base_image')->count())
                @include("layouts.admin.shared.files",['refefile'=>$item->manyfile->where('file_type','base_image')])
                @endif
            </td>	
        </tr>
    </tbody>
</table>
@endsection
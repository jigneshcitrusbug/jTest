
@extends('admin.system.show')
@section('table')
    
@php( $tab=1 )
@if(request()->has('tab'))
	  @php( $tab=request()->get('tab') )
@endif	

<div class="box-content">
@include('admin.technologies.tab') 
<div class="tab-content px-1 pt-1">
	<div role="tabpanel" class="tab-pane collapsed" id="tabIcon1" aria-expanded="{{ ($tab == 1) ? 'true' : 'false' }}" aria-labelledby="baseIcon-tab1">						
		<table class="table table-striped">
		<tbody>
		  
				   
			<tr>
				<th>@lang('common.title')</th>
				<td>{{ $item->title }}</td>
			</tr>
	   
			<tr>
				<th>@lang('common.slug')</th>
				<td>{{ $item->slug }}</td>
			</tr>

		   
		</tbody>
	</table>
	</div>							
	<div class="tab-pane {{ ($tab == 2) ? 'active' : '' }}" id="tabIcon2" aria-expanded="{{ ($tab == 2) ? 'true' : 'false' }}" aria-labelledby="baseIcon-tab2">
		@include('admin.faqs.list') 
	</div>							
</div>							
</div>

@endsection

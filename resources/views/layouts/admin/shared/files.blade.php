 
<div class="row"> 
@foreach($refefile as $rf)
 
<div class="col-sm-2 relative-container" id="ref{{$rf->id}}">
	<a href="{{url('admin/reference-file/'.$rf->id.'/delete')}}" onclick="return confirm('@lang('common.js_msg.confirm_for_delete',['item_name'=>trans('common.label.file')])')" class="close btn btn-danger btn-sm">
		<i class='fa fa-trash' aria-hidden='true'></i>
	</a>
	
	<a class="example-image-link " href="{!! $rf->file_url !!}" data-lightbox="example-2" data-title="{{$rf->file_real_name}}">
	<img src="{!! $rf->file_thumb_url !!}" height="75" />
	</a>
</div>

@endforeach
</div>
<br/>


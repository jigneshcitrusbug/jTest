@push('css')

<link href="{!! asset('app-assets/vendors/css/dragula.min.css') !!}" media="all" rel="stylesheet" type="text/css"/>

@endpush  

  <div class="row">
        <div class="col-12">
            <div class="card">
                <div class="card-header">
					<div class="row">
                        <div class="col-12">
							{!! Form::button("ADD", ['class' => 'btn btn-success add-faq pull-right']) !!}
					    </div>
                    </div>              
                </div>
                <div class="card-body">
					<p>Drag to change display order</p>
					<ul class="list-group" id="basic-list-group">
						@foreach($item->faqs as $faq)
						<li class="list-group-item draggable" did="{{ $faq->id }}">
							<div class="media">
								<div class="media-body">
									<span>{{ $faq->question }}</span>
									<p>{{ $faq->answer }}</p>
								</div>
								<div class="pull-right">

                                    <a href="#" data-id="{{ $faq->id }}" class="edit-faq" title="Edit Faq">
                                        <button class="btn btn-primary btn-xs">
										<i class="fa fa-pencil-square-o" aria-hidden="true"></i>
                                        </button>
                                    </a>
									
									{!! Form::open([
                                    'method'=>'DELETE',
                                    'route' => ['admin.faqs.destroy',$faq->id],
                                    'style' => 'display:inline'
                                    ]) !!}
									{!! Form::hidden('previous_url',route('admin.'.$context)."/".$item->id."?tab=2") !!}
                                    {!! Form::button('<i class="fa fa-trash-o" aria-hidden="true"></i> ', array(
                                    'type' => 'submit',
                                    'class' => 'btn btn-danger btn-xs',
                                    'title' => 'Delete Faq',
                                    'onclick'=>"return confirm('Are you sure?')"
                                    ))!!}
                                    {!! Form::close() !!}
								</div>
							</div>
						</li>
						@endforeach
					</ul>
				</div>
            </div>
        </div>
        </div>
 @push('modal')
 <div class="modal fade text-left" id="add_faq_modal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel34" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h3 class="modal-title" id="myModalLabel34">Add faq</h3>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            {!! Form::open(['url' => '/admin/faqs']) !!}
            {!! Form::hidden('previous_url',route('admin.'.$context)."/".$item->id."?tab=2") !!}
			{!! Form::hidden('refe_table_name',$item->getTable()) !!}
			{!! Form::hidden('refe_field_id',$item->id) !!}
			{!! Form::hidden('status',"active") !!}
			{!! Form::hidden('display_order',$item->faqs->count() +1 ) !!}
           
            <div class="modal-body">
               <label>Question </label>
                <div class="form-group position-relative has-icon-left">
                    {!! Form::textarea('question','' , ['class' => 'form-control', 'rows' => 4, 'cols' => 40,'placeholder'=>"Enter question"]) !!}
                </div>
				<label>Answer </label>
                <div class="form-group position-relative has-icon-left">
                    {!! Form::textarea('answer','' , ['class' => 'form-control', 'rows' => 4, 'cols' => 40,'placeholder'=>"Enter answer"]) !!}
                </div>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-light" style="float: none;" data-dismiss="modal" aria-hidden="true">Cancel</button>
                {!! Form::submit("submit", ['class' => 'btn btn-primary']) !!}
			</div>
            {!! Form::close() !!}
        </div>
    </div>
</div>

 <div class="modal fade text-left" id="edit_faq_modal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel35" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h3 class="modal-title" id="myModalLabel345">Edit faq</h3>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            {!! Form::model([], ['method' => 'PATCH','url' => ["stores"],'id'=>'faq_edit_form']) !!}
			{!! Form::hidden('previous_url',route('admin.'.$context)."/".$item->id."?tab=2") !!}
			{!! Form::hidden('refe_table_name',$item->getTable()) !!}
			{!! Form::hidden('refe_field_id',$item->id) !!}
			<div class="modal-body">
               <label>Question </label>
                <div class="form-group position-relative has-icon-left">
                    {!! Form::textarea('question','' , ['id' => 'edit_question','class' => 'form-control', 'rows' => 4, 'cols' => 40,'placeholder'=>"Enter question"]) !!}
                </div>
				<label>Answer </label>
                <div class="form-group position-relative has-icon-left">
                    {!! Form::textarea('answer','' , ['id' => 'edit_answer','class' => 'form-control', 'rows' => 4, 'cols' => 40,'placeholder'=>"Enter answer"]) !!}
                </div>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-light" style="float: none;" data-dismiss="modal" aria-hidden="true">Cancel</button>
                {!! Form::submit("submit", ['class' => 'btn btn-primary','id'=>'btn_edit_faq']) !!}
			</div>
            {!! Form::close() !!}
        </div>
    </div>
</div>
@endpush
 @push('scripts')

<script src="{!! asset('app-assets/vendors/js/dragula.min.js') !!}" type="text/javascript"></script>
			
<script>

$(document).ready(function () {
  var drake =dragula([document.getElementById('basic-list-group')]);
  
  drake.on('drop', function(el, target, source, sibling) {
	  resetorder();
  });
  var add_modal = "#add_faq_modal";
  var edit_modal = "#edit_faq_modal";
  $(document).on('click', '.add-faq', function (e) {
     $(add_modal).modal('show');
	return false;
  });
  $(document).on('click', '.edit-faq', function (e) {
	var data_id = $(this).attr('data-id'); 
    $(edit_modal).modal('show');
	$('#faq_edit_form').attr('action',"{{url('admin/faqs')}}/" + data_id);
	$("#btn_edit_faq").attr("disabled", true);
    $.ajax({
    	type: "GET",
    	url: "{{url('admin/faqs')}}/" + data_id + "/edit",
    	success: function(data) {
			var ob = data.data;
			$("#btn_edit_faq").removeAttr("disabled");
    		$.each(ob, function (key, data) {
				$('#edit_'+key).val(data);
				
			});
    	}
    });
	 return false;
  });
  
  function resetorder(){
	var c =0;  
	var refe_field_id =" {{ $item->id }}";  
	var refe_table_name =" {{ $item->getTable() }}";  
	var ob=[];
  	$('#basic-list-group').children('li').each(function () {
		c++;	
		var id = $(this).attr('did');
		ob.push({id: id,order:c});
	});
	console.log(ob);
	
	$.ajax({
	type: "POST",
	url: "{{ route('admin.faq.resetorders') }}",
	data: {refe_table_name:refe_table_name,refe_field_id:refe_field_id,dataarray: ob},
	headers: {
		"X-CSRF-TOKEN":"{{ csrf_token() }}"
	}
	}).done(function (data) {
		//toastr.success('Action Success!', data.message);
	});
  }
}); 
</script>
@endpush





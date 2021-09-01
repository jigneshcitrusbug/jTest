@extends('layouts.admin.index')

@section('body_class',' pace-done')

@section('title',trans('survey.label.survey'))

@section('content')

<!-- <div class="row">
    <div class="col-sm-12">
        <div class="content-header"> @lang('survey.label.survey') </div>
        
    </div>
</div> -->
<div class="main-content">

    <div class="content-wrapper">

        <div class="row">
            <div class="col-sm-12">
                <div class="content-header"> @lang($context.'.title') </div>
                
            </div> 
        </div>

        <section id="configuration">
            <div class="row">
                <div class="col-12">
                    <div class="card">
                        <div class="card-header">

                            <div class="row">

                                <div class="col-6">
                                    <div class="actions pull-left">
                                    @php 
                                    if(canAccess($module,'Add')){
                                    @endphp
                                        <a href="{{ route('admin.'.$context.'.create') }}" class="btn btn-success btn-sm" title="Add New User">
                                            <i class="fa fa-plus" aria-hidden="true"></i> @lang('common.add_new')
                                        </a>
                                    @php
                                    }
                                    @endphp
                                       

                                    </div>
                                </div>
                                <div class="col-6">
                                    @include("layouts.admin.shared.filter_deleted")
                                </div>
                            </div>
                        </div>
                        <div class="card-body collapse show">

                            <div class="card-block card-dashboard">


                                <div class="table-responsive">
                                    <table class="table table-bordered table-striped datatable responsive">
                                        <thead>
                                            <tr>
                                                <th># @lang('common.id')</th>
                                                <th>@lang('common.name')</th>
                                                <th>@lang('common.slug')</th>
                                                <th>@lang($context.'.icon')</th>
                                                <th>@lang($context.'.parent_id')</th>

                                                <th>@lang('common.created')</th>
                                                <th>@lang('common.action')</th>

                                            </tr>
                                        </thead>

                                    </table>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </div>
</div>

@endsection



@section('js')
@parent


<script src="{{ getasset('/app-assets/vendors/js/datatable/datatables.min.js') }}" type="text/javascript"></script>

@endsection


@section('css')
@parent
<link rel="stylesheet" type="text/css" href="{{ getasset('/app-assets/vendors/css/tables/datatable/datatables.min.css')}}">

@endsection
 

@push('scripts')
<script>

	
	
	
	var url ="{{ route('admin.'.$context) }}";
    var edit_url = "{{ route('admin.'.$context) }}";
    var auth_check = "{{ \Auth::check() }}";
		
	var auth_uid = {{\Auth::user()->id}};

    datatable = $('.datatable').dataTable({
        pagingType: "full_numbers",
        "language": {
            "emptyTable":"@lang('common.datatable.emptyTable')",
            "infoEmpty":"@lang('common.datatable.infoEmpty')",
            "search": "@lang('common.datatable.search')",
            "sLengthMenu": "@lang('common.datatable.show') _MENU_ @lang('common.datatable.entries')",
            "sInfo": "@lang('common.datatable.showing') _START_ @lang('common.datatable.to') _END_ @lang('common.datatable.of') _TOTAL_ @lang('common.datatable.small_entries')",
            paginate: {
                next: '@lang('common.datatable.paginate.next')',
                previous: '@lang('common.datatable.paginate.previous')',
                first:'@lang('common.datatable.paginate.first')',
                last:'@lang('common.datatable.paginate.last')',
            }
        },
        processing: true,
        serverSide: true,
        autoWidth: false,
        stateSave: true,
        order: [1, "asc"],
        columns: [
                { data: 'id',name : 'id',"searchable": true, "orderable": true},
                { data: 'name',name : 'name',"searchable": true, "orderable": true},
                { data: 'slug',name : 'slug',"searchable": true, "orderable": true},
                { data: 'icon',name : 'icon',"searchable": true, "orderable": true},
                { 
					"data": null,
					"name":"parent_id",
					"searchable": false,
					"orderable": true,
					"render": function (o) {
						var parent_id = "-";
						if(o.parent){
							parent_id = o.parent.name;
						}
						return parent_id;
					}
				},
				{ 
					"data": null,
					"name":"created_at",
					"searchable": false,
					"orderable": true,
					"render": function (o) {
						return o.created_formated;
					}
				},
                {
                    "data": null,
                    "searchable": false,
                    "orderable": false,
                    "width":150,
                    "render": function (o) {
                        var e=""; var v=""; var d= "";
                        v = "<a href='"+edit_url+"/"+o.id+"' value="+o.id+" data-id="+o.id+" ><button class='btn btn-info btn-sm' title='@lang('tooltip.common.icon.eye')' ><i class='fa fa-eye' ></i></button></a>&nbsp;";

						 
                        e = "<a href='"+edit_url+"/"+o.id+"/edit' value="+o.id+" data-id="+o.id+" title='@lang('tooltip.common.icon.edit')' class='btn btn-warning btn-sm'><i class='fa fa-pencil'></i></a>&nbsp;";
						 

                        d = "<a href='javascript:void(0);' class='btn btn-danger btn-sm del-log' title='@lang('tooltip.common.icon.delete')'  data-id="+o.id+" ><i class='fa fa-trash' aria-hidden='true'></i></a>&nbsp;";
                        return v+e+d;
                    }

                }
         ],
        fnRowCallback: function (nRow, aData, iDisplayIndex) {
            $('td', nRow).attr('nowrap', 'nowrap');
            return nRow;
        },
        ajax: {
            url: "{{ route('admin.'.$context.'.datatable') }}", // json datasource
            type: "get", // method , by default get
            data: function (d) {
                @if(request()->has('force'))
					d.enable_deleted = ($('#is_deleted_record').is(":checked")) ? 1 : 0;
				@endif
            }
        }
    });

    $('.filter').change(function() {
        datatable.fnDraw();
    });
	$('#is_deleted_record').change(function() {
		datatable.fnDraw();
    });

    $(document).on('click', '.del-log', function (e) {
			var id = $(this).attr('data-id');
			var r = confirm("@lang('common.js_msg.confirm_for_delete_data')");
			if (r == true) {
				$.ajax({
					type: "DELETE",
					url: "{{ route('admin.'.$context) }}" + "/" + id,
					headers: {
						"X-CSRF-TOKEN": "{{ csrf_token() }}"
					},
					success: function (data) {
						datatable.fnDraw();
						toastr.success("@lang('common.js_msg.action_success')", data.message)
					},
					error: function (xhr, status, error) {
						toastr.error("@lang('common.js_msg.action_not_procede')",erro)
					}
				});
			}
    });


</script>


@endpush

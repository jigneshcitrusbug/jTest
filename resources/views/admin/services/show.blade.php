@extends('layouts.admin.index')

@section('title',trans('issue.label.issue_detail'))

@section('content')

<div class="main-content">
    <div class="content-wrapper">
        <section id="basic-form-layouts">
            <div class="row">
                <div class="col-sm-12">
                    <div class="content-header"> @lang('issue.label.issue_detail') @if($item->name) ({{$item->name}}) @endif</div>
                </div>
            </div>
            <div class="row">
                <div class="col-md-12">
                    <div class="card">
                        <div class="card-header">
                            <a href="{{ route('admin.'.$context) }}">
                                <button type="button" class="btn btn-raised btn-success btn-min-width mr-1 mb-1">
                                    <i class="fa fa-angle-left"></i> @lang($context.'.title')
                                </button>
                            </a>
                            {!! Form::open([
                            'method'=>'DELETE',
                            'url' => ['admin/'.$context, $item->id],
                            'style' => 'display:inline'
                            ]) !!}

                            {!! Form::button('<i class="fa fa-trash" aria-hidden="true"></i> '.trans('common.delete'), array(
                            'type' => 'submit',
                            'class' => 'btn btn-raised btn-danger btn-min-width mr-1 mb-1',
                            'title' => trans('common.delete'),
                            'onclick'=>"return confirm('".trans('common.js_msg.confirm_for_delete_data')."')"
                            ))!!}
                            {!! Form::close() !!}
                        </div>
                        <div class="card-body">
                            <div class="px-3">
								@php( $tab=1 )
								@if(request()->has('tab'))
									  @php( $tab=request()->get('tab') )
								@endif	

								<div class="box-content">
								@include('admin.technologies.tab') 
								<div class="tab-content px-1 pt-1">
									<div role="tabpanel" class="tab-pane {{ ($tab == 1) ? 'active' : '' }}" id="tabIcon1" aria-expanded="{{ ($tab == 1) ? 'true' : 'false' }}" aria-labelledby="baseIcon-tab1">						
										 <div class="row">
											<div class="table-responsive">
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
											</div>
										</div>
									
									</div>							
									<div class="tab-pane {{ ($tab == 2) ? 'active' : '' }}" id="tabIcon2" aria-expanded="{{ ($tab == 2) ? 'true' : 'false' }}" aria-labelledby="baseIcon-tab2">
										@include('admin.faqs.list') 
									</div>							
								</div>							
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
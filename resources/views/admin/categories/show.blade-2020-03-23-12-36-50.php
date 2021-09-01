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
                                <div class="box-content ">
                                    <div class="row">
                                        <div class="table-responsive">
                                            <table class="table table-striped">
                                                <tbody>
													<tr>
                                                        <th>#ID</th>
                                                        <td>{{ $item->id }}</td>
                                                    </tr>
                                                    <tr>
                                                        <th>@lang('common.name')</th>
                                                        <td>{{ $item->name }}</td>
                                                    </tr>
													<tr>
                                                        <th>Slug</th>
                                                        <td>{{ $item->slug }}</td>
                                                    </tr>
													<tr>
                                                        <th>Icon</th>
                                                        <td>{{ $item->icon }}</td>
                                                    </tr>
													<tr>
                                                        <th>Display Order</th>
                                                        <td>{{ $item->ordering }}  </td>
                                                    </tr>
													<tr>
                                                        <th>Parent Category</th>
                                                        <td> @if($item->parent){{ $item->parent->name }} @else N/A @endif </td> 
                                                    </tr>
													<tr>
                                                        <th>Created </th>
                                                        <td>{{ $item->created_formated }}
                                                    </tr>
                                                </tbody>
                                            </table>
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
@extends('layouts.admin.index')
@section('title',trans('issue.label.issues'))
@section('content')
<div class="main-content">
    <div class="content-wrapper">
        <section id="basic-form-layouts">
            <div class="row">
                <div class="col-sm-12">
                    <div class="content-header"> @lang($context.'.edit.title') </div>
                    {{-- @include('partials.page_tooltip',['model' => 'user','page'=>'form']) --}}
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
                            'url' => [ route('admin.'.$context), $item->id],
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
                                {!! Form::model($item, [
                                'method' => 'PATCH',
                                'url' => [route('admin.'.$context.'.update',['roll'=>$item->id]), ],
                                'class' => 'form-horizontal',
                                'files' => true,
                                'autocomplete'=>'off'
                                ]) !!}
                                @include ('admin.'.$context.'.form', ['submitButtonText' => trans('common.update')])
                                {!! Form::close() !!}
                            </div>
                        </div>
                    </div>
                </div>
            </div>
    </div>
</div>
</section>
@endsection




@section('js')
@parent
<script src="//cdn.ckeditor.com/4.6.2/standard/ckeditor.js"></script>
<!-- <script src="/vendor/unisharp/laravel-ckeditor/adapters/jquery.js"></script> -->
@endsection
 

@push('scripts')
<script>
  var options = {
    filebrowserImageBrowseUrl: '/media-manager?type=Images',
    filebrowserImageUploadUrl: '/media-manager/upload?type=Images&_token=',
    filebrowserBrowseUrl: '/media-manager?type=Files',
    filebrowserUploadUrl: '/media-manager/upload?type=Files&_token='
  };
 
CKEDITOR.replace('description', options);
// $('textarea#desc').ckeditor(options);
</script>
 
@endpush

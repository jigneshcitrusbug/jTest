@extends('layouts.admin.index')
@section('title',trans('issue.label.issues'))
@section('content')
 <div class="main-content">
    <div class="content-wrapper">
    <section id="basic-form-layouts">
	<div class="row">
		<div class="col-sm-12">
			<div class="content-header"> @lang($context.'.create.title') </div>
		</div>
	</div>
	<div class="row">
		<div class="col-md-12">
			<div class="card">
				<div class="card-header">
					<div class="actions pull-right">	
					</div>
				</div>
				<div class="card-body">
					<div class="px-3">
						{!! Form::open(['url' => route('admin.'.$context.'s'), 'class' => 'form-horizontal group-border-dashed','id' => 'module_form','autocomplete'=>'off','files'=>true]) !!}
								@include ('admin.'.$context.'.form')
						{!! Form::close() !!}
					</div>
				</div>
			</div>
		</div>
	</div>
	</section>
	</div>
</div>   
@endsection

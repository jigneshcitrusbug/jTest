<div class="row ">

    
    <div class="col-md-6">

        <div class="form-group {{ $errors->has('services_id') ? 'has-error' : ''}}">
            <label for="last_name" class="">
                <span class="services_id">*</span>@lang('servicesdetails.label.services_id')
            </label>
            @php( $services = App\Services::get()->pluck('title', 'id') )
            
            {!! Form::select('services_id',$services, null,['id'=>'services_id','class' => 'form-control']) !!}
			{!! $errors->first('services_id', '<p class="help-block text-danger">:message</p>') !!}
		</div>
      
        <div class="form-group {{ $errors->has('title') ? 'has-error' : ''}}">
            <label for="title" class="">
                <span class="field_compulsory">*</span>@lang($context.'.label.title')
            </label>
			{!! Form::text('title', null,['id'=>'title','class' => 'form-control']) !!}
			{!! $errors->first('title', '<p class="help-block text-danger">:message</p>') !!}
        </div>
        
        <div class="form-group {{ $errors->has('slug') ? 'has-error' : ''}}">
            <label for="slug" class="">
                <span class="field_compulsory">*</span>@lang($context.'.label.title')
            </label>
			{!! Form::text('slug', null,['id'=>'slug','class' => 'form-control']) !!}
			{!! $errors->first('slug', '<p class="help-block text-danger">:message</p>') !!}
		</div>
		
		<div class="form-group{{ $errors->has('desc') ? ' has-error' : ''}}">
            <label for="desc" >
                <span class="field_compulsory"></span>@lang($context.'.label.desc')
            </label>
            <div >
                {!! Form::textarea('desc', null , ['id'=>'desc','class' => 'form-control']) !!}
				{!! $errors->first('desc', '<p class="help-block text-danger">:message</p>') !!}
            </div>
        </div>

        <div class="form-group{{ $errors->has('description') ? ' has-error' : ''}}">
            <label for="description" >
                <span class="field_compulsory"></span>@lang($context.'.label.description')
            </label>
            <div >
                {!! Form::textarea('description', null , ['id'=>'description','class' => 'form-control']) !!}
				{!! $errors->first('description', '<p class="help-block text-danger">:message</p>') !!}
            </div>
        </div>


        <div class="form-group {{ $errors->has('images.*') ? 'has-error' : ''}}">
			<label for="images.*"> Cart Images </label>
			<div class="">
			@if(isset($item) && $item->manyfile->where('file_type','cart_image')->count())
				@include("layouts.admin.shared.files",['refefile'=>$item->manyfile->where('file_type','cart_image')])
			@endif
				{!! Form::file('images[]',  ['id'=>'images','class' => 'form-control','multiple'=>true]) !!}
                {!! $errors->first('images.*', '<p class="help-block text-danger">:message</p>') !!}
                
                {!! Form::hidden('images_type', 'multiple_image' ) !!}
			</div>
        </div>
        
	 
		<div class="form-group {{ $errors->has('image') ? 'has-error' : ''}}">
			<label for="image">  Image </label>
			<div class="">
				@if(isset($item) && $item->manyfile->where('file_type','image')->count())
					@include("layouts.admin.shared.files",['refefile'=>$item->manyfile->where('file_type','image')])
				@endif
				{!! Form::file('image',  ['id'=>'image','class' => 'form-control','multiple'=>false]) !!}
                {!! $errors->first('image', '<p class="help-block text-danger">:message</p>') !!}
                {!! Form::hidden('image_type', 'single_image' ) !!}
			</div>
        </div>  
        
		<div class="form-group">
        {!! Form::submit(isset($submitButtonText) ? $submitButtonText : trans('common.label.create'), ['class' => 'btn btn-primary']) !!}
        {{ Form::reset(trans('common.label.clear_form'), ['class' => 'btn btn-light']) }}
        </div>
   
        
    </div>
   
    
</div>
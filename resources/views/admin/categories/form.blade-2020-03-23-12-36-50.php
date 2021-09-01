<div class="row ">

    
    <div class="col-md-6">
      
        <div class="form-group {{ $errors->has('name') ? 'has-error' : ''}}">
            <label for="name" class="">
                <span class="field_compulsory">*</span>@lang($context.'.label.name')
            </label>
			{!! Form::text('name', null,['id'=>'name','class' => 'form-control']) !!}
			{!! $errors->first('name', '<p class="help-block text-danger">:message</p>') !!}
		</div>
		
		<div class="form-group {{ $errors->has('slug') ? 'has-error' : ''}}">
            <label for="slug" class="">
                <span class="field_compulsory"></span>@lang($context.'.label.slug')
            </label>
			{!! Form::text('slug', null,['id'=>'slug','class' => 'form-control']) !!}
			{!! $errors->first('slug', '<p class="help-block text-danger">:message</p>') !!}
		</div>
		
		<div class="form-group{{ $errors->has('icon') ? ' has-error' : ''}}">
            <label for="role" >
                <span class="field_compulsory"></span>@lang($context.'.label.icon')
            </label>
            <div >
                {!! Form::text('icon', null,['id'=>'icon','class' => 'form-control']) !!}
				{!! $errors->first('icon', '<p class="help-block text-danger">:message</p>') !!}
            </div>
        </div>
		@if(isset($item) && $item->child->count())
			
		@else
		<div class="form-group{{ $errors->has('parent_id') ? ' has-error' : ''}}">
            <label for="role" >
                <span class="field_compulsory">*</span>@lang($context.'.label.parent_id')
            </label>
            <div >
				@php( $citems = \App\Categories::Parentonly()->pluck('name', 'id')->prepend('Select', 0) )
                {!! Form::select('parent_id',$citems, null,['id'=>'parent_id','class' => 'form-control']) !!}
				{!! $errors->first('parent_id', '<p class="help-block text-danger">:message</p>') !!}
            </div>
        </div>
		@endif
		
		<div class="form-group{{ $errors->has('ordering') ? ' has-error' : ''}}">
            <label for="role" >
                <span class="field_compulsory"></span>@lang($context.'.label.ordering')
            </label>
            <div >
                {!! Form::number('ordering', null,['min'=>'1','id'=>'ordering','class' => 'form-control']) !!}
				{!! $errors->first('ordering', '<p class="help-block text-danger">:message</p>') !!}
            </div>
        </div>
		
		<div class="form-group">
        {!! Form::submit(isset($submitButtonText) ? $submitButtonText : trans('common.label.create'), ['class' => 'btn btn-primary']) !!}
        {{ Form::reset(trans('common.label.clear_form'), ['class' => 'btn btn-light']) }}
        </div>
   
        
    </div>
   
    
</div>
<?php
 $hid =	"";
 if(isset($item)){
	 $hid =	"_".$item->id;
 }
 ?>
 

 
<div class="row ">

    {!! Form::hidden('previous_url', str_replace(url('/'), '', url()->previous()) , ['id'=>'previous_url']) !!}
    <div class="col-md-6">
      @if(isset($survey))
        {!! Form::hidden('survey_id',$survey->id, ['class' => 'form-control','id'=>'survey_id']) !!}
      @endif 
		{!! Form::hidden('status',"new", ['class' => 'form-control']) !!}
		
		
	  
		
		<div class="form-group {{ $errors->has('location') ? ' has-error' : ''}}">
            <label for="location" >
                <span class="field_compulsory">*</span>@lang($context.'.create.field.name')
            </label>
            <div >
			{!! Form::text('name', null, ['class' => 'name','id'=>'name','style'=>'width:100%']) !!}
			
				{!! $errors->first('name', '<p class="help-block text-danger">:message</p>') !!}
            </div>
        </div>


        <div class="form-group {{ $errors->has('location') ? ' has-error' : ''}}">
            <label for="location" >
                <span class="field_compulsory">*</span>@lang($context.'.create.field.email')
            </label>
            <div >
			{!! Form::text('email', null, ['class' => 'email','id'=>'email','style'=>'width:100%']) !!}
			
				{!! $errors->first('email', '<p class="help-block text-danger">:message</p>') !!}
            </div>
        </div>
       

        <div class="form-group {{ $errors->has('password') ? ' has-error' : ''}}">
            <label for="password" >
                <span class="field_compulsory">*</span>@lang($context.'.create.field.password')
            </label>
            <div >
			{!! Form::password('password', null, ['class' => 'password','id'=>'password','style'=>'width:100%']) !!}
			
				{!! $errors->first('password', '<p class="help-block text-danger">:message</p>') !!}
            </div>
        </div>
 
		
        <div class="form-group">
        {!! Form::submit(isset($submitButtonText) ? $submitButtonText : trans('common.create'), ['class' => 'btn btn-primary form_submit image_submit_btn']) !!}
        {{ Form::reset(trans('common.clear_form'), ['class' => 'btn btn-light']) }}
 
        </div>
   
       
    </div>
    <div class="col-md-6">
        <div class="form-group {{ $errors->has('location') ? ' has-error' : ''}}">
            <label for="location" >
                <span class="field_compulsory">*</span>@lang($context.'.create.field.rolls')
            </label>
        <div >
        <select name="rolls[]" multiple id="rolls" class="form-control item-menu">
            @foreach($rolls as $roll)
                <option value="{{ $roll->id}}" {{ (isset($item) && $item->rolls()->where('roll_id',$roll->id)->first()) ? 'selected="selected"' : ''  }}  >{{ $roll->title}}</option>           
            @endforeach
        </select>
 
				{!! $errors->first('rolls', '<p class="help-block text-danger">:message</p>') !!}
            </div>
        </div>
		@include("layouts.admin.shared.cropper",['title'=>"Profile Image"])
		
		@if(isset($item) && $item->manyfile->where('file_type','profile')->count())
		<div class="form-group {{ $errors->has('image') ? 'has-error' : ''}}">
			<label for="image">Profile Pict </label>
			@include("layouts.admin.shared.files",['refefile'=>$item->manyfile->where('file_type','profile')])
		</div>
		@endif
    </div>
   
    
</div>







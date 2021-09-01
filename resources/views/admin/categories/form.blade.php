<div class="row ">
    <div class="col-md-6">
            
            {{ Form::cbText('name') }}

            {{ Form::cbText('slug') }}

            {{ Form::cbText('icon') }}

            {{-- {{ Form::cbImage("icon", false , @$item, $context ) }} --}}

            {{ Form::cbMediaImage('param[image_icon]',null,['id'=>'param_image_icon', 'class'=>'form-control']) }}

            {{ Form::cbButtons(trans($context.'.form.create'), trans($context.'.form.clear') ) }}    
    </div>
</div>

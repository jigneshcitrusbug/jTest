<div class="row ">
    <div class="col-md-6">
            
            {{ Form::cbText('name') }}

            {{ Form::cbTextarea('designation') }}

            {{-- {{ Form::cbImage("main", false , @$item, $context ) }} --}}

            {{ Form::cbMediaImage('param[image_main]',null,['id'=>'param_image_main', 'class'=>'form-control']) }}
            

            {{ Form::cbButtons(trans($context.'.form.create'), trans($context.'.form.clear') ) }}    
    </div>
</div>

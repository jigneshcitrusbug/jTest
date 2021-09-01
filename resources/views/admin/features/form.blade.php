<div class="row ">
    <div class="col-md-12">
        {{ Form::cbButtons(trans($context.'.form.create'), trans($context.'.form.clear') ) }}
    </div>
    <div class="col-md-6">
            
            {{ Form::cbText('title') }}

            {{ Form::cbText('slug') }}
                       
            {{ Form::cbMediaImage('param[icon]',null,['id'=>'param_icon', 'class'=>'form-control']) }}

        </div>
       
    <div class="col-md-12">
        {{ Form::cbButtons(trans($context.'.form.create'), trans($context.'.form.clear') ) }}
    </div>
</div>
 
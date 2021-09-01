<div class="row ">
    <div class="col-md-6">
            
            {{ Form::cbText('name') }}

            {{ Form::cbText('email') }}

            {{ Form::cbText('phone') }}

            {{ Form::cbText('company') }}

            {{ Form::cbText('message') }}

            {{ Form::cbText('country_code') }}

            {{ Form::cbButtons(trans($context.'.form.create'), trans($context.'.form.clear') ) }}    
    </div>
</div>

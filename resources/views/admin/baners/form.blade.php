<div class="row ">
    <div class="col-md-6">
            
            {{ Form::cbText('name') }}

            {{ Form::cbText('slug') }}

            {{ Form::cbEditor('description') }}

            {{ Form::cbTextarea('images') }}

            {{ Form::cbButtons(trans($context.'.form.create'), trans($context.'.form.clear') ) }}    
    </div>
</div>

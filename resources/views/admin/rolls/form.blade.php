<div class="row ">
    <div class="col-md-6">
            
            {{ Form::cbText('title') }}

            {{ Form::cbCheckbox('admin') }}

            {{ Form::cbButtons(trans($context.'.form.create'), trans($context.'.form.clear') ) }}    
    </div>
</div>

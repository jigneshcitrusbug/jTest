<div class="row ">
    <div class="col-md-6">
            
            {{ Form::cbText('name') }}

            {{ Form::cbText('slug') }}

            {{ Form::cbText('partner_url') }}

            {{ Form::cbCheckbox('status') }}

            {{ Form::cbImage("main", false , @$item, $context ) }}

            {{ Form::cbButtons(trans($context.'.form.create'), trans($context.'.form.clear') ) }}    
    </div>
</div>

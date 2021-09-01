<div class="row ">
    <div class="col-md-6">
            
            {{ Form::cbText('name') }}

            {{ Form::cbEmail('email') }}

            {{ Form::cbPassword('password') }}

            {{ Form::cbCheckbox('status') }}

            {{ Form::cbRelationMultipleCheckbox("roll_id", \App\Rolls::all()->pluck("title","id") ,"rolls", @$item, false, true ) }}

            {{-- {{ Form::cbImage("main", false , @$item, $context ) }} --}}

            {{ Form::cbMediaImage('param[image_main]',null,['id'=>'param_image_main', 'class'=>'form-control']) }}


            {{ Form::cbButtons(trans($context.'.form.create'), trans($context.'.form.clear') ) }}    
    </div>
</div>

<div class="row ">

    <div class="col-md-12">
        {{ Form::cbButtons(trans($context.'.form.create'), trans($context.'.form.clear') ) }}    
    </div>

    <div class="col-md-6">

        {{ Form::cbText('title') }}

        {{ Form::cbText('slug') }}

        {{ Form::cbText('designation') }}    

        {{ Form::cbEditor('description') }}

        {{ Form::cbEditor('opportunity') }}

        {{ Form::cbText('position') }}

        {{ Form::cbText('work_type') }}

        {{ Form::cbRadioList('status', ['active' => 'Active' , 'pending' => 'Pending'],  true ) }}

        {{ Form::cbText('param[baseSalary]',null,['id'=>'param_baseSalary', 'class'=>'form-control']) }}

        {{-- {{ Form::cbImage("main", false , @$item, $context ) }} --}}

        {{ Form::cbMediaImage('param[image_main]',null,['id'=>'param_image_main', 'class'=>'form-control']) }}

    </div>

    <div class="col-md-6">
        {{ Form::cbEditor('param[skills]',null,['id'=>'param_skills', 'class'=>'form-control']) }}

        {{ Form::cbEditor('param[responsibilities]',null,['id'=>'param_responsibilities', 'class'=>'form-control']) }}
        
        {{ Form::cbEditor('param[qualifications]',null,['id'=>'param_qualifications', 'class'=>'form-control']) }}

        {{-- {{ Form::cbEditor('param[educationRequirements]',null,['id'=>'param_educationRequirements', 'class'=>'form-control']) }} --}}

        {{-- {{ Form::cbTextarea('param[experienceRequirements]',null,['id'=>'param_experienceRequirements', 'class'=>'form-control']) }}

        {{ Form::cbTextarea('param[incentiveCompensation]',null,['id'=>'param_incentiveCompensation', 'class'=>'form-control']) }} --}}
    </div>
    <div class="col-md-12">
        {{ Form::cbButtons(trans($context.'.form.create'), trans($context.'.form.clear') ) }}    
    </div>
    </div>
</div>

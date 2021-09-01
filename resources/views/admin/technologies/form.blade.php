<div class="row ">
    <div class="col-md-12">
        {{ Form::cbButtons(trans($context.'.form.create'), trans($context.'.form.clear') ) }}
    </div>
    <div class="col-md-6">

        {{ Form::cbText('title') }}

        {{ Form::cbText('param[sub_title]',null,['id'=>'param_sub_title', 'class'=>'form-control']) }}
		
		{{ Form::cbText('param[selected_projects]',null,['id'=>'selected_projects', 'class'=>'form-control']) }}


        {{ Form::cbText('slug') }}

        {{ Form::cbCheckbox('featured') }}

        {{ Form::cbEditor('desc') }}





        {{ Form::cbRelationMultipleCheckbox('project_id', \App\Projects::all()->pluck('title','id') ,'projects', @$item, false, true ) }}



        {{-- {{ Form::cbImage('main', false , @$item, $context ) }} --}}
        {{ Form::cbMediaImage('param[image_main]',null,['id'=>'param_image_main', 'class'=>'form-control']) }}


        {{-- {{ Form::cbImage('cover', false , @$item, $context ) }} --}}
        {{ Form::cbMediaImage('param[image_cover]',null,['id'=>'param_image_cover', 'class'=>'form-control']) }}


        {{ Form::cbImage('tech', true , @$item, $context ) }}




        {{ Form::cbMediaImage('icon', @$item->icon ) }}

        {{ Form::cbMediaImage('param[icon_black]',null,['id'=>'param_icon_black', 'class'=>'form-control']) }}





    </div>
    <div class="col-md-6">


        {{ Form::cbText('param[tag_line]',null,['id'=>'param_tag_line', 'class'=>'form-control']) }}

        {{-- {{ Form::cbTextarea('param[services]',null,['id'=>'param_services', 'class'=>'form-control']) }} --}}

        {{ Form::cbText('param[projects_title]',null,['id'=>'param_projects_title', 'class'=>'form-control']) }}

        {{ Form::cbTextarea('param[projects_text]',null,['id'=>'param_projects_text', 'class'=>'form-control']) }}


        {{ Form::cbText('param[hiretitle]',null,['id'=>'param_hiretitle', 'class'=>'form-control']) }}

        {{ Form::cbTextarea('param[hiretext]',null,['id'=>'param_hiretext', 'class'=>'form-control']) }}

        {{ Form::cbText('param[services_title]',null,['id'=>'param_services_title', 'class'=>'form-control']) }}


    </div>

    <div class="col-md-12">

        {{ Form::cbEditor('description') }}

    </div>

    <div class="col-md-12">

        {{ Form::cbEditor('content') }}

    </div>

    <div class="col-md-12">
        {{ Form::cbButtons(trans($context.'.form.create'), trans($context.'.form.clear') ) }}
    </div>

</div>
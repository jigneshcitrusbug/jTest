<div class="row ">

    <div class="col-md-12">
        {{ Form::cbButtons(trans($context.'.form.create'), trans($context.'.form.clear') ) }}
        </div>

    <div class="col-md-6">
      
        {{ Form::cbText('title') }}
        
        {{ Form::cbText('slug') }}
				 
        {{ Form::cbText('param[selected_projects]',null,['id'=>'selected_projects', 'class'=>'form-control']) }}

        {{ Form::cbEditor('description') }} 

        {{ Form::cbRadioList('menu', ['1' => 'Yes' , '0' => 'No'],  true ) }}

        {{ Form::cbRadioList('module', ['1' => 'Yes' , '0' => 'No'],  true ) }}

       
        {{-- {{ Form::cbImage('main', false , @$item, $context ) }} --}}
        {{ Form::cbMediaImage('param[image_main]',null,['id'=>'param_image_main', 'class'=>'form-control']) }}

        
        {{-- {{ Form::cbImage('cover', false , @$item, $context ) }} --}}
        {{ Form::cbMediaImage('param[image_cover]',null,['id'=>'param_image_cover', 'class'=>'form-control']) }}


        {{ Form::cbMediaImage('icon') }}


        {{ Form::cbTextarea('param[tag_line]',null,['id'=>'param_tag_line', 'class'=>'form-control']) }}
        

        {{ Form::cbText('param[projects_title]',null,['id'=>'param_projects_title', 'class'=>'form-control']) }}

        {{ Form::cbTextarea('param[projects_text]',null,['id'=>'param_projects_text', 'class'=>'form-control']) }}


        {{ Form::cbText('param[hire_title]',null,['id'=>'param_hire_title', 'class'=>'form-control']) }}

        {{ Form::cbTextarea('param[hire_text]',null,['id'=>'param_hire_text', 'class'=>'form-control']) }}
        
        
    </div> 

    <div class="col-md-6">

        {{ Form::cbEditor('intro') }}

        {{-- {{ Form::cbEditor('param[expertise]',null,['id'=>'param_expertise', 'class'=>'form-control']) }} --}}

        {{-- {{ Form::cbRelationMultipleCheckbox('services_id', \App\Servicedetails::all()->pluck('title','id') ,'servicedetails', @$item, false, true ) }} --}}

        {{ Form::cbRelationMultipleCheckbox('project_id', \App\Projects::all()->pluck('title','id') ,'projects', @$item, false, true ) }}
 
        {{ Form::cbRelationMultipleCheckbox('tech_id', \App\Technologies::orderby("featured","DESC")->orderby("title","ASC")->get()->pluck('title','id') ,'technologies', @$item, true, false ) }}
        
    </div> 

    <div class="col-md-12">

        {{ Form::cbEditor('content') }} 

    </div>

    <div class="col-md-12">
        {{ Form::cbButtons(trans($context.'.form.create'), trans($context.'.form.clear') ) }}
    </div>
   
    
</div>
<div class="row ">

        <div class="col-md-12">
            {{ Form::cbButtons(trans($context.'.form.create'), trans($context.'.form.clear') ) }}    
        </div>

        <div class="col-md-6">


            <h2>Client Information</h2>

            {{ Form::cbText('name') }}

            {{ Form::cbText('position') }}

            {{ Form::cbText('param[industry]') }}

            {{ Form::cbText('param[employee]') }}

            {{ Form::cbText('param[address]') }}

            {{ Form::cbText('param[review_date]') }}
            

            {{-- {{ Form::cbImage("main", false , @$item, $context ) }} --}}
            {{ Form::cbMediaImage('param[image_main]',null,['id'=>'param_image_main', 'class'=>'form-control']) }}

        </div>
        <div class="col-md-6">
            <h2>Client Feedback</h2>
            {{ Form::cbTextarea('title') }}
            {{ Form::cbEditor('description') }}
        </div>


        <div class="col-md-6">
            <h2>Project Information</h2>
            {{ Form::cbText('param[project_title]') }}
            {{ Form::cbText('param[project_task]') }}
            {{ Form::cbText('param[project_price]') }}
            {{ Form::cbText('param[project_date]') }}
        </div>
        <div class="col-md-6">
            {{ Form::cbEditor('param[summary]') }}
        </div>

        <div class="col-md-12">
            <h2>Clutch URL</h2>
            {{ Form::cbText('param[clutch_url]') }}
             
        </div>


        

        <div class="col-md-12">
            {{ Form::cbButtons(trans($context.'.form.create'), trans($context.'.form.clear') ) }}    
        </div>
</div>

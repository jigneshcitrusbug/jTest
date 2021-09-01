<div class="row ">
    <div class="col-md-12">
        {{ Form::cbButtons(trans($context.'.form.create'), trans($context.'.form.clear') ) }}
    </div>
    <div class="col-md-6">


       
            
            {{ Form::cbText('title') }}

            {{ Form::cbText('slug') }}

            @php 
            
            $services = App\Services::get()->pluck('title', 'id')->prepend('Select', 0)
        @endphp

        {{ Form::cbSelect('services_id',$services) }}
         

        {{-- {{ Form::cbImage("main", false , @$item, $context ) }} --}}

        {{ Form::cbMediaImage('param[image_main]',null,['id'=>'param_image_main', 'class'=>'form-control']) }}


        {{ Form::cbMediaImage('icon') }}

             
    </div>
    <div class="col-md-6">
        {{ Form::cbTextarea('desc') }}

        {{ Form::cbEditor('description') }}
    </div>
    <div class="col-md-12">
        {{ Form::cbButtons(trans($context.'.form.create'), trans($context.'.form.clear') ) }}
    </div>
</div>

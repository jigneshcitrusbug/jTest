<div class="row ">
    <div class="col-md-12">
        {{ Form::cbButtons(trans($context.'.form.create'), trans($context.'.form.clear') ) }}
    </div>
    <div class="col-md-6">
            
            {{ Form::cbText('title') }}

            {{ Form::cbText('slug') }}

            @php 
            
            $tech = App\Technologies::get()->pluck('title', 'id')->prepend('Select', 0)
        @endphp

            {{ Form::cbSelect('tech_id',$tech) }}
          
  
            {{-- {{ Form::cbImage("main", false , @$item, $context ) }} --}}

            {{-- {{ Form::cbMediaImage('param[icon]',null,['id'=>'param_icon', 'class'=>'form-control']) }} --}}


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
 
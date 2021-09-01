<div class="row ">
    <div class="col-md-6">
            
            {{ Form::cbText('url') }}

            {{ Form::cbText('title') }}
            <p> 
                Ideal : 50–60 characters <br/> Current:<span id="title_length" > </span>
            </p>

            {{ Form::cbTextarea('description') }}
            <p> 
                Ideal : 155–160 characters <br/> Current:<span id="description_length" > </span>
            </p>

            
            {{ Form::cbRadioList('sitemap', ['1' => 'Yes' , '0' => 'No'],  true ) }}

            {{ Form::cbText('og_type') }}

            {{ Form::cbText('twitter_card') }}

            {{-- {{ Form::cbImage("default", false , @$item, $context ) }} --}}

            {{ Form::cbMediaImage('param[image_default]',null,['id'=>'param_image_default', 'class'=>'form-control']) }}
            

            {{-- {{ Form::cbImage("facebook", false , @$item, $context ) }} --}}

            {{-- {{ Form::cbImage("twitter", false , @$item, $context ) }} --}}

            {{ Form::cbMediaImage('param[image_twitter]',null,['id'=>'param_image_twitter', 'class'=>'form-control']) }}
			{{ Form::cbTextarea('param[keywords]',null,['id'=>'keywords', 'class'=>'form-control']) }}


            {{-- {{ Form::cbImage("linkdin", false , @$item, $context ) }} --}}

            {{ Form::cbButtons(trans($context.'.form.create'), trans($context.'.form.clear') ) }}    
    </div>
</div>


@push('scripts')
<script>
    
    $(document).ready(function () {
        $("#title").on('keydown',function(){
            $('#title_length').text($(this).val().length);
        });
        $('#title_length').text($("#title").val().length);

        $("#description").on('keydown',function(){
            $('#description_length').text($(this).val().length);
        });
        $('#description_length').text($("#description").val().length);
        
    });
</script>    
@endpush
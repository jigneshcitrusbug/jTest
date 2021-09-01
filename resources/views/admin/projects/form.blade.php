 
<div class="row ">
    <div class="col-md-12">

        
        {{ Form::cbButtons(trans($context.'.form.create'), trans($context.'.form.clear') ) }}
    </div>  
    
    <div class="col-md-6">
        {{ Form::cbText('title') }}
        {{ Form::cbText('slug') }}
        
        {{ Form::cbEditor('description') }}

        {{ Form::cbTextarea('desc') }}

        {{ Form::cbTextarea('sow') }}
       
        {{ Form::cbRadioList('menu', ['1' => 'Yes' , '0' => 'No'],  true ) }}

        

        {{ Form::cbRadioList('status', ['1' => 'Active' , '0' => 'Pending'],  true ) }}
        
        @php 
            $image_main = '/storage/uploads/projects/'.$item->slug.'/main.jpg';
            $image_cover = '/storage/uploads/projects/'.$item->slug.'/cover.jpg';
            $image_scroll = '/storage/uploads/projects/'.$item->slug.'/scroll.jpg';
            $image_thumb_1 = '/storage/uploads/projects/'.$item->slug.'/thumb_1.jpg';
            $image_thumb_2 = '/storage/uploads/projects/'.$item->slug.'/thumb_2.jpg';
            $image_menu = '/storage/uploads/projects/'.$item->slug.'/menu.jpg';
        @endphp
        {{ Form::cbMediaImage('param[image_main]',$image_main,['id'=>'param_image_main', 'class'=>'form-control', 'value' => 'abc' ]) }}

        {{ Form::cbMediaImage('param[image_cover]',$image_cover,['id'=>'param_image_cover', 'class'=>'form-control']) }}
        
        {{ Form::cbMediaImage('param[image_scroll]',$image_scroll,['id'=>'param_image_scroll', 'class'=>'form-control']) }}

        {{ Form::cbMediaImage('param[image_thumb_1]',$image_thumb_1,['id'=>'param_thumb_1', 'class'=>'form-control']) }}
        {{ Form::cbMediaImage('param[image_thumb_2]',$image_thumb_2,['id'=>'param_thumb_2', 'class'=>'form-control']) }}
        {{ Form::cbMediaImage('param[image_menu]',$image_menu,['id'=>'param_image_menu', 'class'=>'form-control']) }}
        
        {{-- {{ Form::cbImage('main', false , @$item, $context ) }}
        {{ Form::cbImage('cover', false , @$item, $context ) }}
        {{ Form::cbImage('scroll', false , @$item, $context ) }}
        {{ Form::cbImage('thumb', false , @$item, $context ) }}  --}}


        {{ Form::cbImage('images', true , @$item, $context ) }} 

        

        {{ Form::cbRelationMultipleCheckbox('feature_id', \App\Features::all()->pluck('title','id') ,'features', @$item, false, false ) }}

    </div>
    <div class="col-md-6">

        

         
        
        {{ Form::cbRelationMultipleCheckbox('tech_id', \App\Technologies::orderby("featured","DESC")->orderby("title","ASC")->get()->pluck('title','id') ,'technologies', @$item, false, false ) }}
 
        {{ Form::cbRelationMultipleCheckbox('service_id', \App\Services::all()->pluck('title','id') ,'services', @$item, false, true ) }}

        {{ Form::cbRelationMultipleCheckbox('testimonial_id', \App\Testimonials::select([DB::raw("CONCAT(name,' ',title) AS display_name"),'id'])->get()->pluck('display_name','id') ,'testimonials', @$item, false, true ) }}


        {{ Form::cbSelect('param[project_type]',['website'=>'Website','mobile'=>'Mobile'],['id'=>'param_project_type', 'class'=>'form-control']) }}
        
        {{-- {{ Form::cbText('param[title]',null,['id'=>'param_title', 'class'=>'form-control']) }}

        {{ Form::cbTextarea('param[desc]',null,['id'=>'param_desc', 'class'=>'form-control']) }} --}}


        {{ Form::cbText('param[project_work_height]') }}
 
    </div>

        
    <div class="col-md-12">
        {{ Form::cbButtons(trans($context.'.form.create'), trans($context.'.form.clear') ) }}
    </div>    
         
        
        
    </div>
</div>
 
{{--  
<div class="row ">
    <div class="col-md-6">
        {{ Form::cbText('title',null,[] ) }}
        {{ Form::cbText('slug',null,[] ) }}
        {{ Form::cbRelationMultiple('tech_id', \App\Technologies::all()->pluck('title','id') ,[],'technologies',@$item ) }}
        {{ Form::cbRelationMultiple('service_id', \App\Services::all()->pluck('title','id') ,[],'services',@$item ) }}
        {{ Form::cbImage('main', false , @$item, $context ) }}
        {{ Form::cbImage('cart', false , @$item, $context ) }}
        {{ Form::cbImage('color_images', true , @$item, $context ) }} 
    </div>
    <div class="col-md-6">
        {{ Form::cbTextarea('desc',null,[] ) }}
        {{ Form::cbEditor('description',null,[] ) }}
        {{ Form::cbTextarea('sow',null,[] ) }}
        {{ Form::cbImage('size_images', true , @$item, $context ) }}
    </div>
</div>
<div class="row ">
    <div class="col-md-12">
        {{ Form::cbButtons(trans($context.'.form.create'), trans($context.'.form.clear') ) }}
    </div>
</div> --}}
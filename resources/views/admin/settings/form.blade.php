<div class="row ">

    <div class="col-md-12">
        {{ Form::cbButtons(trans($context.'.form.create'), trans($context.'.form.clear') ) }}
        </div>

    <div class="col-md-6">
      
       {{ Form::cbText('fkey') }}


                @if(@$item->ftype == 'text')
                {!! Form::cbText('fvalue', null , ['id'=>'fvalue','class' => 'form-control']) !!}
                @elseif(@$item->ftype == 'textarea')
                {!! Form::cbTextarea('fvalue', null , ['id'=>'fvalue','class' => 'form-control']) !!}
                @elseif(@$item->ftype == 'editor')
                {!! Form::cbTextarea('fvalue', null , ['id'=>'fvalue','class' => 'form-control editor']) !!}
                @elseif(@$item->ftype == 'image')
               
                <div class="input-group">
                    <span class="input-group-btn">
                        <a id="lfm" data-input="fvalue" data-preview="holder" class="btn btn-primary">
                        <i class="fa fa-picture-o"></i> Choose
                        </a>
                    </span>
                    <input id="fvalue" name="fvalue" class="form-control" type="text" value="{{@$item->fvalue}}" name="filepath">
                </div>
                <img id="holder" src="{{@$item->fvalue}}"  style="margin-top:15px;max-height:100px;">

                @else
                {!! Form::cbTextarea('fvalue', null , ['id'=>'fvalue','class' => 'form-control']) !!}
                @endif

            @if(getSess('is_super_admin'))
            <div >
                {!! Form::cbTextarea('finformation', null , ['id'=>'finformation','class' => 'form-control']) !!}
			 
            </div>
            @else
            <div >
                
                {!! @$item->finformation !!}

            </div>
            @endif

          @if(getSess('is_super_admin'))
            <div class="form-group">
                <label for="description" >
                    <span class=""></span>@lang('settings.label.ftype')
                </label>
                <div >
                    {!! Form::cbSelect('ftype',array('text' => 'Text', 'textarea' => 'Textarea', 'image' => 'Image','editor' => 'Editor'), null , ['id'=>'ftype','class' => 'form-control','disabled'=> !getSess('is_super_admin')]) !!}
                    {!! $errors->first('ftype', '<p class="help-block text-danger">:message</p>') !!}
                </div>
            </div>
            @endif
      
    </div> 

    

    <div class="col-md-12">
        {{ Form::cbButtons(trans($context.'.form.create'), trans($context.'.form.clear') ) }}
    </div>
   
    
</div>
      
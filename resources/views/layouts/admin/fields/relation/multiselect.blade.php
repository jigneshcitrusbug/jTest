 @php
       
        if($item){
            $value = $item->$relation()->select('*')->pluck($key);
        }else{
            $value = null;
        }    

        // dd($value);
          
@endphp
    
{!! Form::select($key,$items,$value,array('multiple'=>'multiple','name'=>'relation['.$relation.']['.$key.'][]')) !!}
 


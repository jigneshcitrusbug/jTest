<?php
    namespace App;
    use App\BaseModel;
    class Features extends BaseModel
    {
        //declare Tabel Name
        protected $table = "features";
    
            //declare Fillable Variable
            protected $fillable = [
                'title','slug' 
            ];
         
    }
?>
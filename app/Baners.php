<?php
    namespace App;
    use App\BaseModel;
    class Baners extends BaseModel
    {
        //declare Tabel Name
        protected $table = "baners";
    
            //declare Fillable Variable
            protected $fillable = [
                'name','slug','description','images' 
            ];
         
    }
?>
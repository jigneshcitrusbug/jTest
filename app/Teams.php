<?php
    namespace App;
    use App\BaseModel;
    class Teams extends BaseModel
    {
        //declare Tabel Name
        protected $table = "team";
    
            //declare Fillable Variable
            protected $fillable = [
                'name','designation','ordering' 
            ];
         
    }
?>
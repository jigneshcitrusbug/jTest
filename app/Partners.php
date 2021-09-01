<?php
    namespace App;
    use App\BaseModel;
    class Partners extends BaseModel
    {
        //declare Tabel Name
        protected $table = "partners";
    
            //declare Fillable Variable
            protected $fillable = [
                'name','slug','ordering','partner_url','status' 
            ];
         
    }
?>
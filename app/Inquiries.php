<?php
    namespace App;
    use App\BaseModel;
    class Inquiries extends BaseModel
    {
        //declare Tabel Name
        protected $table = "inquiries";
    
            //declare Fillable Variable
            protected $fillable = [
                'name','email','ordering','phone','status','company','message','country_code','ip','page'
            ];
         
    }
?>
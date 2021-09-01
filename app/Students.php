<?php
    namespace App;
    use App\BaseModel;
    class Students extends BaseModel
    {
        //declare Tabel Name
        protected $table = "students";
    
            //declare Fillable Variable
            protected $fillable = [
                'user_id','name','email','description' 
            ];
        
            public function users(){
                return $this->hasone("App\Users", "user_id", "id");
            }
             
    }
?>
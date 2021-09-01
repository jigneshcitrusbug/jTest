<?php
    namespace App;
    use App\BaseModel;
    class Resumes extends BaseModel
    {
        //declare Tabel Name
        protected $table = "resumes";
    
            //declare Fillable Variable
            protected $fillable = [
                'career_id','name','email', 'phone','message','resume'
            ];


            public function career(){
                return $this->hasone("App\Careers", "id", "career_id");
            }
         
    }
?>
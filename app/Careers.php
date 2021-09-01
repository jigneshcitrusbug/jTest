<?php
    namespace App;
    use App\BaseModel;
    class Careers extends BaseModel
    {
        //declare Tabel Name
        protected $table = "career";
    
            //declare Fillable Variable
            protected $fillable = [
                'designation','title','description','opportunity','position','slug','ordering','work_type','status'
            ];
          

            public function resumes(){
                return $this->hasmany("App\Resumes", "career_id", "id");
            }

    }
?>
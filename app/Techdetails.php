<?php
    namespace App;
    use App\BaseModel;
    class Techdetails extends BaseModel
    {
        //declare Tabel Name
        protected $table = "techdetails";
    
            //declare Fillable Variable
            protected $fillable = [
                'title','slug','desc','description','tech_id','param','icon' 
            ];
        
            public function technology(){
                return $this->hasone("App\Technologies", "tech_id", "id");
            }

            public function techdetails_single_main()
            {
                return $this->hasMany('App\Refefile', 'refe_field_id', 'id')
                ->where('refe_table_name', $this->getTable())
                ->where('file_type','techdetails_single_main')
                ->orderby("priority","DESC")
                ->orderby("created_at","DESC")
                ;
            }
             
    }
?>
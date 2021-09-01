<?php
    namespace App;
    use App\BaseModel;
    class Servicedetails extends BaseModel
    {
        //declare Tabel Name
        protected $table = "servicedetails";
    
        //declare Fillable Variable
        protected $fillable = [
            'title','slug','desc','description','services_id', 'param','icon'
        ];
    
        public function services(){
            return $this->hasone("App\Services", "services_id", "id"); 
        }


        public function servicedetails_single_main()
        {
            return $this->hasMany('App\Refefile', 'refe_field_id', 'id')
            ->where('refe_table_name', $this->getTable())
            ->where('file_type','servicedetails_single_main')
            ->orderby("priority","DESC")
            ->orderby("created_at","DESC")
            ;
        }
         
    }
?> 
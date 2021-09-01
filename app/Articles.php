<?php
    namespace App;
    use App\BaseModel;
    class Articles extends BaseModel
    {
        //declare Tabel Name
        protected $table = "articles";
    
            //declare Fillable Variable
            protected $fillable = [
                'title','slug','desc','description','status','category_id', 'param', 'views','tags'
            ];
        
            public function categories(){
                return $this->hasone("App\Categories", "id", "category_id");
            }
             
            public function articles_single_main()
            {
                return $this->hasMany('App\Refefile', 'refe_field_id', 'id')
                ->where('refe_table_name', $this->getTable())
                ->where('file_type','articles_single_main')
                ->orderby("priority","DESC")
                ->orderby("created_at","DESC")
                ;
            }
    }

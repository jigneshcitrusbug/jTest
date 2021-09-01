<?php
    namespace App;
    use App\BaseModel;
    use App\Refefile;
    class Technologies extends BaseModel
    {
        //declare Tabel Name
        protected $table = "technology";
    
            //declare Fillable Variable
            protected $fillable = [
                'title','slug','desc','description', 'icon', 'featured', 'content' ,'sub_title' 
            ];

            public function techdetails(){
                return $this->hasMany('App\Techdetails','tech_id','id');
            }

            public  function projects()
            {
                return $this->belongsToMany('App\Projects', 'projects_tech','tech_id','project_id');
            }

            public  function services()
            {
                return $this->belongsToMany('App\Services', 'services_technology','tech_id','service_id');
            }

           

        public function technologies_single_main()
        {
            return $this->hasMany('App\Refefile', 'refe_field_id', 'id')
            ->where('refe_table_name', $this->getTable())
            ->where('file_type','technologies_single_main')
            ->orderby("priority","DESC")
            ->orderby("created_at","DESC")
            ;
        }
        public function technologies_single_cover()
        {
            return $this->hasMany('App\Refefile', 'refe_field_id', 'id')
            ->where('refe_table_name', $this->getTable())
            ->where('file_type','technologies_single_cover')
            ->orderby("priority","DESC")
            ->orderby("created_at","DESC")
            ;
        }
        public function technologies_multiple_tech()
        {
            return $this->hasMany('App\Refefile', 'refe_field_id', 'id')
            ->where('refe_table_name', $this->getTable())
            ->where('file_type','technologies_multiple_tech')
            ->orderby("priority","DESC")
            ->orderby("created_at","DESC")
            ;
        }
		public function faqs()
		{
			return $this->hasMany('App\Faqs', 'refe_field_id', 'id')
			->where('refe_table_name', $this->getTable())
			->orderby("display_order","asc")
			->orderby("created_at","asc");
		}
        

        
    } 
?>
<?php
    namespace App;
    use App\BaseModel;
    class Testimonials extends BaseModel
    {
        //declare Tabel Name
        protected $table = "testimonials";
    
        //declare Fillable Variable
        protected $fillable = [
            'name','position','title','description' 
        ];
         
        public  function projects()
        {
            return $this->belongsToMany('App\Projects', 'projects_testimonials','testimonial_id','project_id');
        }

        public function testimonials_single_main()
        {
            return $this->hasMany('App\Refefile', 'refe_field_id', 'id')
            ->where('refe_table_name', $this->getTable())
            ->where('file_type','testimonials_single_main')
            ->orderby("priority","DESC")
            ->orderby("created_at","DESC") 
            ;
        } 
    }
?>
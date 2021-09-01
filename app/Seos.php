<?php
    namespace App;
    use App\BaseModel;
    class Seos extends BaseModel
    {
        //declare Tabel Name
        protected $table = "seos";
    
            //declare Fillable Variable
            protected $fillable = [
                'url','title','description','og_type','twitter_card', 'sitemap'
            ];
     
            

            public function seos_single_default()
            {
                return $this->hasMany('App\Refefile', 'refe_field_id', 'id')
                ->where('refe_table_name', $this->getTable())
                ->where('file_type','seos_single_default')
                ->orderby("priority","DESC")
                ->orderby("created_at","DESC")
                ;
            }

            public function seos_single_facebook()
            {
                return $this->hasMany('App\Refefile', 'refe_field_id', 'id')
                ->where('refe_table_name', $this->getTable())
                ->where('file_type','seos_single_facebook')
                ->orderby("priority","DESC")
                ->orderby("created_at","DESC")
                ;
            }

            public function seos_single_twitter()
            {
                return $this->hasMany('App\Refefile', 'refe_field_id', 'id')
                ->where('refe_table_name', $this->getTable())
                ->where('file_type','seos_single_twitter')
                ->orderby("priority","DESC")
                ->orderby("created_at","DESC")
                ;
            }

            public function seos_single_linkdin()
            {
                return $this->hasMany('App\Refefile', 'refe_field_id', 'id')
                ->where('refe_table_name', $this->getTable())
                ->where('file_type','seos_single_linkdin')
                ->orderby("priority","DESC")
                ->orderby("created_at","DESC")
                ;
            }
    }
?>
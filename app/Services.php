<?php
namespace App;

use App\BaseModel;
 
class Services extends BaseModel

{
    protected $table = "services";
    protected $fillable = [
        'title','slug','intro','description' , 'service_id', 'icon', 'content', 'menu',  'module'
    ];

    public function servicedetails(){
        return $this->hasMany('App\Servicedetails');
    }

    public  function projects()
    {
        return $this->belongsToMany('App\Projects', 'projects_services','service_id','project_id');
    }

    public  function technologies()
    {
        return $this->belongsToMany('App\Technologies', 'services_technology','service_id','tech_id');
    }

    

    public function services_single_cover()
    {
        return $this->hasMany('App\Refefile', 'refe_field_id', 'id')
        ->where('refe_table_name', $this->getTable())
        ->where('file_type','services_single_cover')
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


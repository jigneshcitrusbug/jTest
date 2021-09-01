<?php
namespace App;

use App\BaseModel;
 
class Projects extends BaseModel

{
    protected $table = "projects";
    
    protected $fillable = [
        'title','slug','desc','description', 'sow', 'menu', 'status',   'ordering'
    ];

    public  function technologies()
    {
        return $this->belongsToMany('App\Technologies', 'projects_tech','project_id','tech_id');
    }
    
    public  function features()
    {
        return $this->belongsToMany('App\Features', 'projects_features','project_id','feature_id');
    }

    public  function services()
    {
        return $this->belongsToMany('App\Services', 'projects_services','project_id','service_id');
    }

    public  function testimonials()
    {
        return $this->belongsToMany('App\Testimonials', 'projects_testimonials','project_id','testimonial_id');
    } 

    public function projects_single_main() 
    {
        return $this->hasMany('App\Refefile', 'refe_field_id', 'id')
        ->where('refe_table_name', $this->getTable())
        ->where('file_type','projects_single_main')
        ->orderby("priority","DESC")
        ->orderby("created_at","DESC")
        ;
    }

    public function projects_single_thumb()
    {
        return $this->hasMany('App\Refefile', 'refe_field_id', 'id')
        ->where('refe_table_name', $this->getTable())
        ->where('file_type','projects_single_thumb')
        ->orderby("priority","DESC")
        ->orderby("created_at","DESC")
        ;
    }
    
    public function projects_single_cover()
    {
        return $this->hasMany('App\Refefile', 'refe_field_id', 'id')
        ->where('refe_table_name', $this->getTable())
        ->where('file_type','projects_single_cover')
        ->orderby("priority","DESC")
        ->orderby("created_at","DESC")
        ;
    }
    public function projects_single_scroll()
    {
        return $this->hasMany('App\Refefile', 'refe_field_id', 'id')
        ->where('refe_table_name', $this->getTable())
        ->where('file_type','projects_single_scroll')
        ->orderby("priority","DESC")
        ->orderby("created_at","DESC")
        ;
    }
    public function projects_multiple_images()
    {
        return $this->hasMany('App\Refefile', 'refe_field_id', 'id')
        ->where('refe_table_name', $this->getTable())
        ->where('file_type','projects_multiple_images')
        ->orderby("priority","DESC")
        ->orderby("created_at","DESC")
        ;
    }
    
 
}


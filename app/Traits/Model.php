<?php 
 namespace App\Traits;
 use Auth;
 use App\BaseModel;
 trait Model
 {

    
    public function getCreatedHumansAttribute()
    {
        if($this->created_at != ""){
            return \Carbon\Carbon::parse($this->created_at)->diffForHumans();
        }
		return $this->created_at;
    }
	public function getCreatedFormatedAttribute()
    {
		if($this->created_at != ""){
           return \Carbon\Carbon::parse($this->created_at)->format(\config('settings.date_format'));
        }
		return $this->created_at;
    }
    public function onefile()
    {
        return $this->hasOne('App\Refefile', 'refe_field_id', 'id')
		->where('refe_table_name', $this->getTable())
		->orderby("priority","DESC")
		->orderby("created_at","DESC");
    }
	public function manyfile() 
    {
        return $this->hasMany('App\Refefile', 'refe_field_id', 'id')
		->where('refe_table_name', $this->getTable())
		->orderby("priority","DESC")
		->orderby("created_at","DESC");
		
    }

 }   
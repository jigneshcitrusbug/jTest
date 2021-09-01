<?php

namespace App;

use App\BaseModel;

class Country extends BaseModel
{
	protected $table = 'country';

    
    protected $primaryKey = 'id';
	
    protected $fillable = [
        'iso','name','nicename','iso3','numcode','phonecode' 
    ];
	 
}

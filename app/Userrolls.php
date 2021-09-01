<?php
namespace App;

use Illuminate\Database\Eloquent\Model;
 
class Userrolls extends Model

{
    protected $table = "users_rolls"; 
    protected $fillable = [
        'user_id',
        'roll_id' 
    ];  

    public function rollpermissions()
    {
        return $this->hasMany('App\Rollpermissions', 'roll_id', 'roll_id');
    }

    public function roll()
    {
        return $this->hasOne('App\Rolls', 'id', 'roll_id');
    }

}


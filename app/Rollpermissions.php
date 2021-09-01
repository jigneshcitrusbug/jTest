<?php
namespace App;

use Illuminate\Database\Eloquent\Model;
 
class Rollpermissions extends Model

{

    protected $table = "roll_permissions";

    protected $fillable = [

        'roll_id',
        'permission_id',
        'module'
    ];

   
    public function permission()
    {
        return $this->hasOne('App\Permissions', 'id', 'permission_id');
    }
}


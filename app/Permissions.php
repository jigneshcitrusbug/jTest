<?php
    namespace App;
    use App\BaseModel;
    class Permissions extends BaseModel
    {
        //declare Tabel Name
        protected $table = "permissions";
    
            //declare Fillable Variable
            protected $fillable = [
                'title' 
            ];
            public function rollpermissions()
            {
                return $this->hasMany('App\Rollpermissions', 'permission_id', 'id');
            }
    }
?>
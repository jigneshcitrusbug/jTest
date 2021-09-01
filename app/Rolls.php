<?php
    namespace App;
    use App\BaseModel;
    class Rolls extends BaseModel
    {
        //declare Tabel Name
        protected $table = "rolls";
    
            //declare Fillable Variable
            protected $fillable = [
                'title','admin' 
            ];
        
            public function rollpermissions()
            {
                return $this->hasMany('App\Rollpermissions', 'roll_id', 'id');
            }

            public function userrolls()
            {
                return $this->hasMany('App\Userrolls', 'roll_id', 'id');
            }
         
    }
?>
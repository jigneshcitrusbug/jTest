<?php
    namespace App;
    use Illuminate\Notifications\Notifiable;
    use Illuminate\Contracts\Auth\MustVerifyEmail;
    use Illuminate\Foundation\Auth\User as Authenticatable;   
    use App\Traits\Model as TraitModel;
    class Users extends Authenticatable
    {
        use Notifiable;
        use TraitModel;

        //declare Tabel Name
        protected $table = "users";
    
        //declare Fillable Variable
        protected $fillable = [
            'name','email','password','status' 
        ];
         
        public  function rolls()
        {
            return $this->belongsToMany('App\Rolls', 'users_rolls','user_id','roll_id');
        }
    }
?>
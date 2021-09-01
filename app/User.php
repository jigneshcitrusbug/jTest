<?php

namespace App;

use Illuminate\Notifications\Notifiable;
use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Foundation\Auth\User as Authenticatable;
use App\BaseModel;

class User extends Authenticatable
{
    use Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'name', 'email', 'password','email_verified_at'
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password', 'remember_token',
    ];

    /**
     * The attributes that should be cast to native types.
     *
     * @var array
     */
    protected $casts = [
        'email_verified_at' => 'datetime',
    ];


    public function rolls()
    {
        return $this->hasMany('App\Userrolls', 'user_id', 'id');
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

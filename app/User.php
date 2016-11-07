<?php

namespace App;

use Illuminate\Notifications\Notifiable;
use Illuminate\Foundation\Auth\User as Authenticatable;

class User extends Authenticatable
{
    use Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'role_id' , 'is_active' , 'name','photo_id' ,'email', 'password',
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password', 'remember_token',
    ];


    public function role()
    {
        return $this->belongsTo('App\Role');
    }


    public function photo()
    {
        return $this->belongsTo('App\Photo');
    }

    public function posts()
    {
        return $this->hasmany('App\Post');
    }

    public function isAdmin()
    {
        if($this->role->name == "administrator" && $this->is_active == 1){
            return true;
        }
        return false;

    }

    public function setNameAttribute($value)
    {
        $this->attributes['name'] = ucfirst($value);
    }

    public function getGravatarAttribute()
    {
        $hash = md5(strtolower(trim($this->attributes['email'])))."?d=wavatar&s=50";
        return "http://www.gravatar.com/avatar/$hash";
    }

//    public function setPasswordAttribute($value)
//    {
//        $this->attributes['password'] = bcrypt($value);
//    }
}

<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    protected $fillable=[
        'user_id','category_id','photo_id','title','slug','body'
    ];


    public function getRouteKeyName()
    {
        return 'slug';
    }

    public function user()
    {
        return $this->belongsTo('App\User');
    }

    public function category()
    {
        return $this->belongsTo('App\Category');
    }

    //Check photo relation :: hasmany
    public function photo()
    {
        return $this->belongsTo('App\Photo');
    }
}

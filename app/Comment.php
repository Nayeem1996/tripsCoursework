<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Comment extends Model
{
    //
    public function users()
    {
        return $this->belongsToMany('App\User');
    }
    
    public function trips()
    {
        return $this->belongsToMany('App\Trip');
    }
}


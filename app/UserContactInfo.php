<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class UserContactInfo extends Model
{
    public function user()
    {
        return $this->belongsTo('App\User');
    }
}

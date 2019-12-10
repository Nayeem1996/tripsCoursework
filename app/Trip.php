<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Trip extends Model
{
    // One-to-many relation
    public function tripCoordinator()
    {
        return $this->belongsTo('App\TripCoordinator');
    }

    // Many-to-many relation
    public function users()
    {
        return $this->belongsToMany('App\User');
    }
}

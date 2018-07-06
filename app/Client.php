<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Client extends Model
{
    //

    public function contactpersons()
    {
        return $this->hasMany('App\ContactPerson');
    }

    public function user()
    {
        return $this->belongsTo('App\User');
    }
}

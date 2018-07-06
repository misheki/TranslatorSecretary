<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class ContactPerson extends Model
{
    //

    public function projects()
    {
        return $this->hasMany('App\Project');
    }
    
    public function client()
    {
        return $this->belongsTo('App\Client');
    }


}

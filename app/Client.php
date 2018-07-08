<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Client extends Model
{
    //
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'user_id', 'code', 'name', 'email', 'address', 'country', 'website'
    ];

    public function contactpersons()
    {
        return $this->hasMany('App\ContactPerson');
    }

    public function user()
    {
        return $this->belongsTo('App\User');
    }

    public function projects()
    {
        return $this->hasManyThrough('App\Project', 'App\ContactPerson');
    }
}

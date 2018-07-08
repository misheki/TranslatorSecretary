<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Package extends Model
{
    //
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'name', 
        'code', 
        'description', 
        'price', 
        'status', 
        'duration'
    ];

    public function subscriptions()
    {
        return $this->hasMany('App\Subscription');
    }
}

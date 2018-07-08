<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class ContactPerson extends Model
{
    //
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'client_id', 'name', 'email', 'address', 'phone', 'mobile', 'fax', 'skypeid'
    ];

    public function projects()
    {
        return $this->hasMany('App\Project');
    }
    
    public function client()
    {
        return $this->belongsTo('App\Client');
    }


}

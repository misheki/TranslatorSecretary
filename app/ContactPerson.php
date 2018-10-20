<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class ContactPerson extends Model
{
    protected $table = 'contact_persons';
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

<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Project extends Model
{
    //
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'user_id', 
        'contact_person_id', 
        'code', 
        'title', 
        'end_client', 
        'description',
        'genre1',
        'genre2',
        'source_lang',
        'target_lang',
        'received_at',
        'deadline_at',
        'submitted_at',
        'featurethis'
    ];

    public function purchaseorder()
    {
        return $this->hasOne('App\PurchaseOrder');
    }

    public function contactperson()
    {
        return $this->belongsTo('App\ContactPerson');
    }

    public function alerts()
    {
        return $this->hasMany('App\Alert');
    }
}

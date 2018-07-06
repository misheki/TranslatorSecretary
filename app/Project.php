<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Project extends Model
{
    //
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

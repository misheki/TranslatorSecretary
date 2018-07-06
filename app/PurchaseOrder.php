<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class PurchaseOrder extends Model
{
    //
    public function project()
    {
        return $this->belongsTo('App\Project');
    }
}

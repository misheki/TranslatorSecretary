<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class PurchaseOrder extends Model
{
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'user_id', 
        'po_num', 
        'dated_at', 
        'file'
    ];

    public function project()
    {
        return $this->belongsTo('App\Project');
    }
}

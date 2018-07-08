<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Invoice extends Model
{
    //
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'project_id', 
        'dated_at', 
        'invoice_num', 
        'payment_terms', 
        'qty', 
        'unit', 
        'currency', 
        'rate', 
        'total_amount', 
        'deposit_amount', 
        'file'
    ];

    public function project()
    {
        return $this->belongsTo('App\Project');
    }

}

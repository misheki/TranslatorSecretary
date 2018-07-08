<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Alert extends Model
{
     //
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'user_id', 'type', 'message', 'expiry', 'consumed', 'status'
    ];

    public function user()
    {
        return $this->belongsTo('App\User');
    }
}

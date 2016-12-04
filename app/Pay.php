<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Pay extends Model
{
    protected $fillable = [
        'total_price'
    ];

    public function orders() {
        return $this->hasMany('App\Order');
    }

    public function user() {
        return $this->belongsTo('App\User');
    }
}

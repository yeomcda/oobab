<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class MakeCheckout extends Model
{
    protected $fillable = [
        'total_price'
    ];

    public function orders() {
        return $this->hasMany('App\Order');
    }
}

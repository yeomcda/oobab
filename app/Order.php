<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Order extends Model
{
    public function user(){
        return $this->belongsTo('App\User');
    }

    public function pay(){
        return $this->belongsTo('App\Pay');
    }

    public function make_checkout(){
        return $this->belongsTo('App\MakeCheckout');
    }
}

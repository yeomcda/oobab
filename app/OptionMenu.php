<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class OptionMenu extends Model
{
    protected $fillable = ['title', 'price'];

    public function menus()
    {
        return $this->belongsToMany(Menu::class);
    }
}

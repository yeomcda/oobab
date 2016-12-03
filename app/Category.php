<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
    protected $fillable = ['category', 'title'];

    public function menus()
    {
        return $this->hasMany(Menu::class, 'category');
    }
}

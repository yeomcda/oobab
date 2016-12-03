<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Menu extends Model
{
    protected $fillable = ['category', 'imagePath', 'title', 'description', 'price'];

    public function categories()
    {
        return $this->belongsTo(Category::class, 'category');
    }

    public function option_menus()
    {
        return $this->belongsToMany(OptionMenu::class);
    }
}

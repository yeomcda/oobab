<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class MenuOptionMenu extends Model
{
    protected $table = 'menu_option_menu';
    protected $fillable = ['menu_id', 'option_menu_id'];
}

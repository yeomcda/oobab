<?php

namespace App\Http\Controllers;

use App\Category;
use App\Menu;
use Illuminate\Http\Request;
use Session;

class MenuController extends Controller
{
    public function getIndex($category = 0){
        $categories = Category::all();
        if($category == 0)
            $menus = Menu::all();
        else
            $menus = Category::find($category)->menus;

        return view('menu.index', ['categories' => $categories, 'menus' => $menus, 'select_category' => $category]);
    }
}
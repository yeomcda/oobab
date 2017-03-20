<?php

namespace App\Http\Controllers;

use App\Bookmark;
use App\Category;
use App\Menu;
use Illuminate\Support\Facades\Auth;

class MenuController extends Controller
{
    public function getIndex($category = 0){
        $categories = Category::all();
        if($category == 0)
            $menus = Menu::all();
        else
            $menus = Category::find($category)->menus;

        # 즐겨찾기 메뉴인지 상태 추가.
        $bookmarks = [];
        if(!is_null(Auth::user()))
            $bookmarks = Auth::user()->bookmarks()->get();
        $bookmarkMenuIDs = [];
        foreach ($bookmarks as $bookmark)
        {
            array_push($bookmarkMenuIDs, $bookmark->menu_id);
        }

        foreach ($menus as $menu)
        {
            $menu["isBookmark"] = false;
            $menuID = $menu->id;
            if(in_array($menuID, $bookmarkMenuIDs))
            {
                $menu["isBookmark"] = true;
            }
        }

        return view('menu.index', ['categories' => $categories, 'menus' => $menus, 'select_category' => $category]);
    }

    public function getBookmarkAdd($id)
    {
        Bookmark::firstOrCreate([
            'user_id' => Auth::user()->id,
            'menu_id' => $id,
        ]);

        return redirect()->back();
    }

    public function getBookmarkDelete($id)
    {
        Bookmark::where('user_id', Auth::user()->id)->where('menu_id', $id)->delete();

        return redirect()->back();
    }
}
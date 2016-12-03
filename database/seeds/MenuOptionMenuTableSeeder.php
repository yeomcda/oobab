<?php

use Illuminate\Database\Seeder;

class MenuOptionMenuTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        # option: 1 => 계란후라이, 2 => 밥곱빼기, 3 => 현미밥, 4 => 영양밥

        $menu_ids = [1, 59];
        $option_ids = [1];
        foreach ($menu_ids as $menu_id) {
            foreach($option_ids as $option_id){
                $menu_option_menu = new \App\MenuOptionMenu([
                    'menu_id' => $menu_id,
                    'option_menu_id' => $option_id
                ]);
                $menu_option_menu->save();
            }
        }

        $menu_ids = [2, 3, 4, 5, 6, 7, 8, 9, 10, 11, 12, 13, 14, 15, 16, 17, 19, 20, 21, 22, 23, 24, 36, 41, 42, 43, 44];
        $option_ids = [1,2,3,4];
        foreach ($menu_ids as $menu_id) {
            foreach($option_ids as $option_id){
                $menu_option_menu = new \App\MenuOptionMenu([
                    'menu_id' => $menu_id,
                    'option_menu_id' => $option_id
                ]);
                $menu_option_menu->save();
            }
        }

        $menu_ids = [18, 35, 39, 40];
        $option_ids = [2,3,4];
        foreach ($menu_ids as $menu_id) {
            foreach($option_ids as $option_id){
                $menu_option_menu = new \App\MenuOptionMenu([
                    'menu_id' => $menu_id,
                    'option_menu_id' => $option_id
                ]);
                $menu_option_menu->save();
            }
        }

        $menu_ids = [25, 26, 27, 28, 29, 30, 31, 32, 38];
        $option_ids = [1,2];
        foreach ($menu_ids as $menu_id) {
            foreach($option_ids as $option_id){
                $menu_option_menu = new \App\MenuOptionMenu([
                    'menu_id' => $menu_id,
                    'option_menu_id' => $option_id
                ]);
                $menu_option_menu->save();
            }
        }

        $menu_ids = [33, 34, 37];
        $option_ids = [2];
        foreach ($menu_ids as $menu_id) {
            foreach($option_ids as $option_id){
                $menu_option_menu = new \App\MenuOptionMenu([
                    'menu_id' => $menu_id,
                    'option_menu_id' => $option_id
                ]);
                $menu_option_menu->save();
            }
        }

        $menu_ids = [57];
        $option_ids = [4];
        foreach ($menu_ids as $menu_id) {
            foreach($option_ids as $option_id){
                $menu_option_menu = new \App\MenuOptionMenu([
                    'menu_id' => $menu_id,
                    'option_menu_id' => $option_id
                ]);
                $menu_option_menu->save();
            }
        }

        $menu_ids = [74, 75, 76, 77];
        $option_ids = [5,6];
        foreach ($menu_ids as $menu_id) {
            foreach($option_ids as $option_id){
                $menu_option_menu = new \App\MenuOptionMenu([
                    'menu_id' => $menu_id,
                    'option_menu_id' => $option_id
                ]);
                $menu_option_menu->save();
            }
        }
    }
}

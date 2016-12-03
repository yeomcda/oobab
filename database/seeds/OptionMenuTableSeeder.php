<?php

use Illuminate\Database\Seeder;

class OptionMenuTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $option_menu = new \App\OptionMenu([
            'title' => '계란 후라이',
            'price' => 500
        ]);
        $option_menu->save();

        $option_menu = new \App\OptionMenu([
            'title' => '밥곱빼기',
            'price' => 200
        ]);
        $option_menu->save();

        $option_menu = new \App\OptionMenu([
            'title' => '현미밥',
            'price' => 1000
        ]);
        $option_menu->save();

        $option_menu = new \App\OptionMenu([
            'title' => '영양밥',
            'price' => 1500
        ]);
        $option_menu->save();

        $option_menu = new \App\OptionMenu([
            'title' => '유자드레싱',
            'price' => 0
        ]);
        $option_menu->save();

        $option_menu = new \App\OptionMenu([
            'title' => '사과드레싱',
            'price' => 0
        ]);
        $option_menu->save();
    }
}

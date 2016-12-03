<?php

use Illuminate\Database\Seeder;

class CategoryTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $category = new \App\Category([
            'category' => 1,
            'title' => '미식가시리즈',
        ]);
        $category->save();

        $category = new \App\Category([
            'category' => 2,
            'title' => '프리미엄시리즈',
        ]);
        $category->save();

        $category = new \App\Category([
            'category' => 3,
            'title' => '고기고기시리즈',
        ]);
        $category->save();

        $category = new \App\Category([
            'category' => 4,
            'title' => '모둠시리즈',
        ]);
        $category->save();

        $category = new \App\Category([
            'category' => 5,
            'title' => '카레',
        ]);
        $category->save();

        $category = new \App\Category([
            'category' => 6,
            'title' => '어린이도시락',
        ]);
        $category->save();

        $category = new \App\Category([
            'category' => 7,
            'title' => '마요시리즈',
        ]);
        $category->save();

        $category = new \App\Category([
            'category' => 8,
            'title' => '덮밥',
        ]);
        $category->save();

        $category = new \App\Category([
            'category' => 9,
            'title' => '볶음밥',
        ]);
        $category->save();

        $category = new \App\Category([
            'category' => 10,
            'title' => '비빔밥',
        ]);
        $category->save();

        $category = new \App\Category([
            'category' => 11,
            'title' => '찌개',
        ]);
        $category->save();

        $category = new \App\Category([
            'category' => 12,
            'title' => '실속반찬',
        ]);
        $category->save();

        $category = new \App\Category([
            'category' => 13,
            'title' => '한솥밥',
        ]);
        $category->save();

        $category = new \App\Category([
            'category' => 14,
            'title' => '미니반찬',
        ]);
        $category->save();

        $category = new \App\Category([
            'category' => 15,
            'title' => '간식&안주시리즈',
        ]);
        $category->save();

        $category = new \App\Category([
            'category' => 16,
            'title' => '스낵류',
        ]);
        $category->save();

        $category = new \App\Category([
            'category' => 17,
            'title' => '쉐이크샐러드',
        ]);
        $category->save();
    }
}

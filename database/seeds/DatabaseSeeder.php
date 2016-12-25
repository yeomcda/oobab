<?php

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $this->call(CategoryTableSeeder::class);
        $this->call(MenuTableSeeder::class);
        $this->call(OptionMenuTableSeeder::class);
        $this->call(MenuOptionMenuTableSeeder::class);
        $this->call(RoleTableSeeder::class);
    }
}

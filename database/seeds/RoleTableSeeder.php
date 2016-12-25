<?php

use Illuminate\Database\Seeder;

class RoleTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $role_user = new \App\Role([
            'name' => 'User'
        ]);
        $role_user->save();

        $role_user = new \App\Role([
            'name' => 'Manager'
        ]);
        $role_user->save();

        $role_user = new \App\Role([
            'name' => 'Admin'
        ]);
        $role_user->save();
    }
}

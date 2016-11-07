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

        $role = new \App\Category([
            'name' => 'Web Developer'
        ]);
        $role->save();

        $role = new \App\Category([
            'name' => 'Account'
        ]);
        $role->save();

        $role = new \App\Category([
            'name' => 'Human resources'
        ]);
        $role->save();

        $role = new \App\Category([
            'name' => 'Art'
        ]);
        $role->save();

        $role = new \App\Category([
            'name' => 'Writing'
        ]);
        $role->save();

    }
}

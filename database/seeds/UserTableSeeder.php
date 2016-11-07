<?php

use Illuminate\Database\Seeder;

class UserTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $role = new \App\User([
            'name' => 'administrator',
            'role_id'=>1,
            'is_active'=>1,
            'email' => 'youngchung68@gmail.com',
            'password' => '$2y$10$C3u9UTlnptqkq1Xpkt10JeAtu/3cI04vvJlTSIPD9XWZ0ZzkS1sYu',
        ]);
        $role->save();
    }
}

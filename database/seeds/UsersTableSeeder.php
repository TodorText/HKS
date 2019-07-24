<?php

use App\User;
use Illuminate\Database\Seeder;
use App\Permission;

class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        User::truncate(); //清空資料庫
        User::create([
            'name' => 'tudou',
            'password' => bcrypt('123456'),
            'email' => '18511099264@163.com',
            'position' => 'admin',
            'company_id' => 1,
            'email_verified_at' => now(),
        ]);
        User::create([
            'name' => 'warren',
            'password' => bcrypt('123456'),
            'email' => 'warren@holla.world',
            'position' => 'admin',
            'company_id' => 1,
            'email_verified_at' => now(),
        ]);
    }
}

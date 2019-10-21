<?php

use Illuminate\Database\Seeder;

class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $users = [
            [
                'name' => 'PeterParker',
                'email' => 'peter@gmail.com',
                'password' => bcrypt('iamspiderman'),
            ],
            [
                'name' => 'Admin',
                'email' => 'admin1@gmail.com',
                'password' => bcrypt('iamironman'),
            ],
        ];
        DB::table('users')->insert($users);
    }
}

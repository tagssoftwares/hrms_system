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
        DB::table('users')->insert([
            'name' => 'admin',
            'username' => 'admin',
            'email' => 'admin@gmail.com',
            'confirm_password' => bcrypt('password'),
            'password' => bcrypt('password'),
            'role' => 'admin',

        ]);
        DB::table('users')->insert([
            'name' => 'user',
            'username' => 'username',
            'email' => 'user@gmail.com',
            'confirm_password' => bcrypt('password'),
            'password' => bcrypt('password'),
            'role' => 'user',
        ]);
    }
}

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
            'name' => "Jozo",
            'email' => 'jozo@gmail.com',
            'password' => bcrypt('password'),
        ]);
        DB::table('users')->insert([
            'name' => "Mate",
            'email' => 'mate@gmail.com',
            'password' => bcrypt('password'),
        ]);
    }
}

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
        //
		 DB::table('users')->insert([
            'name' => 'admin',
            'email' => 'yt.admin.2018@gmail.com',
            'is_admin' => 1,
            'password' => bcrypt('secret'),
        ]);
		DB::table('users')->insert([
            'name' => 'viewer',
            'email' => 'yt.viewer.2018@gmail.com',
            'is_admin' => 0,
            'password' => bcrypt('viewer'),
        ]);
    }
}

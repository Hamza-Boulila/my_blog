<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

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
            'email' => 'admin@localhost.com',
            'password' => bcrypt('admin'),
            'created_at' => "2021-09-14_15:51:00",
            'updated_at' => "2021-09-14_15:51:00"
        ]);
    }
}

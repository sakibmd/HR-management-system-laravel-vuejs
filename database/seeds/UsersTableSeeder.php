<?php

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
          'role_id'   => '1',
          'name'      => 'Mr. Admin',
          'email'     => 'admin@gmail.com',
          'about'     => 'Hi i am admin',
          'contact'     => '01670605075',
          'dob'     => '1996-08-15',
          'image'     => 'default.png',
          'isapproved'     => 'approved',
          'created_at' => '2021-02-03 13:20:14',
          'updated_at' => '2021-02-03 13:20:14',
          'password'  => bcrypt('11223344'),
        ]);

    DB::table('users')->insert([
          'role_id'   => '2',
          'name'      => 'Sakib Mohammed',
          'email'     => 'sakib@gmail.com',
          'about'     => 'Hi i am Sakib Mohammed',
          'contact'     => '01670115075',
          'dob'     => '1996-08-15',
          'image'     => 'default.png',
          'isapproved'     => 'approved',
          'created_at' => '2021-02-03 13:20:14',
          'updated_at' => '2021-02-03 13:20:14',
          'password'  => bcrypt('11223344'),
        ]);



    }
}

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
            'role_id' => '1',
            'name' => 'Mr. Admin',
            'email' => 'admin@gmail.com',
            'about' => 'Hi i am admin',
            'contact' => '01670605075',
            'dob' => '1996-08-15',
            'image' => 'default.png',
            'isapproved' => 'approved',
            'created_at' => '2021-02-03 13:20:14',
            'updated_at' => '2021-02-03 13:20:14',
            'password' => bcrypt('11223344'),
            'position' => 'admin',
        ]);

        DB::table('users')->insert([
            'role_id' => '2',
            'name' => 'Sakib Mohammed',
            'email' => 'sakib@gmail.com',
            'about' => 'Hi i am Sakib Mohammed',
            'contact' => '01670115075',
            'dob' => '1996-08-15',
            'image' => '1.jpeg',
            'isapproved' => 'approved',
            'created_at' => '2021-02-03 13:20:14',
            'updated_at' => '2021-02-03 13:20:14',
            'password' => bcrypt('11223344'),
            'position' => 'Web Developer',
        ]);

        DB::table('users')->insert([
            'role_id' => '2',
            'name' => 'Akash Kormokar',
            'email' => 'akash@gmail.com',
            'about' => 'Hi i am Akash Kormokar',
            'contact' => '01685967489',
            'dob' => '1992-10-19',
            'image' => '2.jpeg',
            'isapproved' => 'approved',
            'created_at' => '2021-02-03 13:20:14',
            'updated_at' => '2021-02-03 13:20:14',
            'password' => bcrypt('11223344'),
            'position' => 'Javascript Developer',
        ]);

        DB::table('users')->insert([
            'role_id' => '2',
            'name' => 'Shaker Ahmedr',
            'email' => 'shaker@gmail.com',
            'about' => 'Hi i am Shaker Ahmed',
            'contact' => '01714151617',
            'dob' => '1992-2-26',
            'image' => '3.jpeg',
            'isapproved' => 'pending',
            'created_at' => '2021-02-03 13:20:14',
            'updated_at' => '2021-02-03 13:20:14',
            'password' => bcrypt('11223344'),
            'position' => 'UI/UX Designer',
        ]);

        DB::table('users')->insert([
            'role_id' => '2',
            'name' => 'Maruf Ahmed',
            'email' => 'maruf@gmail.com',
            'about' => 'Hi i am Maruf Ahmed',
            'contact' => '01714251617',
            'dob' => '1992-2-26',
            'image' => '4.jpeg',
            'isapproved' => 'approved',
            'created_at' => '2021-02-03 13:20:14',
            'updated_at' => '2021-02-03 13:20:14',
            'password' => bcrypt('11223344'),
            'position' => 'UI/UX Designer',
        ]);

        DB::table('users')->insert([
          'role_id' => '2',
          'name' => 'Salman Chy',
          'email' => 'salman@gmail.com',
          'about' => 'Hi i am Salman Chy',
          'contact' => '0166651617',
          'dob' => '1998-10-06',
          'image' => '5.jpeg',
          'isapproved' => 'approved',
          'created_at' => '2021-02-03 13:20:14',
          'updated_at' => '2021-02-03 13:20:14',
          'password' => bcrypt('11223344'),
          'position' => 'Android Developer',
      ]);

      DB::table('users')->insert([
        'role_id' => '2',
        'name' => 'Jannath Syeda',
        'email' => 'jannath@gmail.com',
        'about' => 'Hi i am Jannath',
        'contact' => '01662523262',
        'dob' => '1996-06-06',
        'image' => '6.jpeg',
        'isapproved' => 'approved',
        'created_at' => '2021-02-03 13:20:14',
        'updated_at' => '2021-02-03 13:20:14',
        'password' => bcrypt('11223344'),
        'position' => 'Laravel Developer',
    ]);

    DB::table('users')->insert([
        'role_id' => '2',
        'name' => 'Fahim Kawsar',
        'email' => 'fahim@gmail.com',
        'about' => 'Hi i am Fahim',
        'contact' => '01633323262',
        'dob' => '1995-06-25',
        'image' => '7.jpeg',
        'isapproved' => 'pending',
        'created_at' => '2021-02-03 13:20:14',
        'updated_at' => '2021-02-03 13:20:14',
        'password' => bcrypt('11223344'),
        'position' => 'Vue.js Developer',
    ]);

    DB::table('users')->insert([
        'role_id' => '2',
        'name' => 'Bappa Khan',
        'email' => 'bappa@gmail.com',
        'about' => 'Hi i am Bappa',
        'contact' => '01454523262',
        'dob' => '1998-12-25',
        'image' => '8.jpeg',
        'isapproved' => 'pending',
        'created_at' => '2021-02-03 13:20:14',
        'updated_at' => '2021-02-03 13:20:14',
        'password' => bcrypt('11223344'),
        'position' => 'Wordpress Developer',
    ]);

    }
}

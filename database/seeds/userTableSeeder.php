<?php

use Illuminate\Database\Seeder;

class userTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        App\user::create([
          'name' => 'azad',
          'email' => 'azad@gmail.com',
          'password' =>bcrypt('123456789'),
        ]);
    }
}

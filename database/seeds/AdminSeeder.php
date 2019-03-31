<?php

use Illuminate\Database\Seeder;
use App\User;

class AdminSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        User::create([
         'name'=>"sondip poul singh",
         'email'=>"admin@gmail.com",
         'password'=>bcrypt('sondip'),
         'avatar'=>"/avatars/admin.png",
         'admin'=>1
        ]);
    }
}

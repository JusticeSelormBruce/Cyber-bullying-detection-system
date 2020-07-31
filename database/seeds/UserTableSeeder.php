<?php

use Illuminate\Database\Seeder;
use App\User;
use Illuminate\Support\Facades\Hash;
class UserTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        User::create([
            'name'=>"Justice Selorm Bruce",
            'email'=>"justiceselormbruce@gmail.com",
            'password'=> Hash::make("password"),

        ]);
    }
}

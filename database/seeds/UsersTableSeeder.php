<?php

use Illuminate\Database\Seeder;
use App\User;

class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        \DB::table('users')->insert([
            [
                "name" => "Ada Lovelace",
                "email" => "lovelace@email.com",
                "age" => 35,
                "password" => Hash::make('password'),
                "created_at" => new DateTime
            ],
            [
                "name" => "Lala Okon",
                "email" => "lala@email.com",
                "age" => 17,
                "password" => Hash::make('password'),
                "created_at" => new DateTime
            ],
            [
                "name" => "Peter Paul",
                "email" => "peter@email.com",
                "age" => 18,
                "password" => Hash::make('password'),
                "created_at" => new DateTime
            ],
            [
                "name" => "Bayo Ajayi",
                "email" => "bayo@email.com",
                "age" => 25,
                "password" => Hash::make('password'),
                "created_at" => new DateTime
            ],
        ]);
    }
}

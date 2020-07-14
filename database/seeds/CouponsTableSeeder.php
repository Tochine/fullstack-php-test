<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Str;

class CouponsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        \DB::table('coupons')->insert([
            [
                "user_id" => 2,
                "code" => Str::random(6),
                "value" => 30,
                "valid" => true,
                "created_at" => new DateTime,
            ],

            [
                "user_id" => 4,
                "code" => Str::random(6),
                "value" => 30,
                "valid" => true,
                "created_at" => new DateTime
            ],
        ]);
    }
}

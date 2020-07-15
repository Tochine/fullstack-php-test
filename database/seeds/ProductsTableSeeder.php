<?php

use Illuminate\Database\Seeder;

class ProductsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        \DB::table('products')->insert([
            [
                "name" => "Blue T Shirt",
                "image" => 'public/product_img/blue-t-shirt.jpg',
                "description" => "is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy",
                "price" => 1500.00,
                "created_at" => new DateTime
            ],
            [
                "name" => "Black Bag",
                "image" => 'public/product_img/gold-zipper-on-black-fashion-backpack.jpg',
                "description" => "is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy",
                "price" => 1200.00,
                "created_at" => new DateTime
            ],
            [
                "name" => "White & Black Watches",
                "image" => 'public/product_img/watches-in-black-white.jpg',
                "description" => "is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy",
                "price" => 400.00,
                "created_at" => new DateTime
            ],
            [
                "name" => "Yoga Mat",
                "image" => 'public/product_img/yoga-accessories.jpg',
                "description" => "is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy",
                "price" => 400.00,
                "created_at" => new DateTime
            ],
            [
                "name" => "White & Black Watches",
                "image" => 'public/product_img/watches-in-black-white.jpg',
                "description" => "is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy",
                "price" => 400.00,
                "created_at" => new DateTime
            ],
            [
                "name" => "Blue T Shirt",
                "image" => 'public/product_img/blue-t-shirt.jpg',
                "description" => "is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy",
                "price" => 1500.00,
                "created_at" => new DateTime
            ],
            [
                "name" => "Yoga Mat",
                "image" => 'public/product_img/yoga-accessories.jpg',
                "description" => "is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy",
                "price" => 400.00,
                "created_at" => new DateTime
            ],
            [
                "name" => "Black Bag",
                "image" => 'public/product_img/gold-zipper-on-black-fashion-backpack.jpg',
                "description" => "is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy",
                "price" => 1200.00,
                "created_at" => new DateTime
            ],
        ]);
    }
}

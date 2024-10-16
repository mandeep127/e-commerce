<?php

namespace Database\Seeders;

use App\Models\Product;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class ProductSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */


    public function run()
    {
        Product::create([
            'name' => 'Product 1',
            'price' => 299.99,
            'description' => 'This is Product 1 description.',
            'image' => 'product1.jpg'
        ]);

        Product::create([
            'name' => 'Product 2',
            'price' => 149.99,
            'description' => 'This is Product 2 description.',
            'image' => 'product2.jpg'
        ]);
    }
}

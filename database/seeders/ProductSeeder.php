<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ProductSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
     public function run()
    {
        DB::table('products')->insert([
            ['name' => 'Laptop ASUS ROG', 'price' => 25000000],
            ['name' => 'Smartphone iPhone 14', 'price' => 18000000],
            ['name' => 'Monitor LG 27 Inch', 'price' => 5000000],
            ['name' => 'Keyboard Mechanical Razer', 'price' => 1500000],
            ['name' => 'Mouse Logitech G Pro', 'price' => 1200000],
            ['name' => 'Headset HyperX Cloud II', 'price' => 1300000],
            ['name' => 'SSD Samsung 1TB', 'price' => 2000000],
            ['name' => 'RAM Corsair 16GB', 'price' => 1400000],
            ['name' => 'Printer Epson L3150', 'price' => 2700000],
            ['name' => 'Router TP-Link Archer', 'price' => 900000],
        ]);
    }
}

<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class StocTransactionSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run()
    {
        DB::table('stoc_transactions')->insert([
            [
                'transaction_type' => 'sale',
                'quantity' => 5,
                'product_id' => 1,
                'customer_id' => 1,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'transaction_type' => 'sale',
                'quantity' => 2,
                'product_id' => 2,
                'customer_id' => 2,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'transaction_type' => 'return',
                'quantity' => 1,
                'product_id' => 3,
                'customer_id' => 3,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'transaction_type' => 'sale',
                'quantity' => 4,
                'product_id' => 4,
                'customer_id' => 4,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'transaction_type' => 'sale',
                'quantity' => 3,
                'product_id' => 5,
                'customer_id' => 5,
                'created_at' => now(),
                'updated_at' => now(),
            ],
        ]);
    }
}

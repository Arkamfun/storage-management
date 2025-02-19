<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class PurchasesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run()
    {
        $purchases = [
            [
                'product_id' => 1,
                'supplier_id' => 1,
                'quantity' => 50,
                'contact' => 6281234567890,
                'invoice' => 'INV-202402001',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'product_id' => 2,
                'supplier_id' => 2,
                'quantity' => 30,
                'contact' => 6289876543210,
                'invoice' => 'INV-202402002',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'product_id' => 3,
                'supplier_id' => 3,
                'quantity' => 40,
                'contact' => 6281122334455,
                'invoice' => 'INV-202402003',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'product_id' => 4,
                'supplier_id' => 4,
                'quantity' => 20,
                'contact' => 6285566778899,
                'invoice' => 'INV-202402004',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'product_id' => 5,
                'supplier_id' => 5,
                'quantity' => 60,
                'contact' => 6289988776655,
                'invoice' => 'INV-202402005',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'product_id' => 6,
                'supplier_id' => 1,
                'quantity' => 25,
                'contact' => 6285544332211,
                'invoice' => 'INV-202402006',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'product_id' => 7,
                'supplier_id' => 2,
                'quantity' => 45,
                'contact' => 6287766554433,
                'invoice' => 'INV-202402007',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'product_id' => 8,
                'supplier_id' => 3,
                'quantity' => 35,
                'contact' => 6283344556677,
                'invoice' => 'INV-202402008',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'product_id' => 9,
                'supplier_id' => 4,
                'quantity' => 55,
                'contact' => 6281122338899,
                'invoice' => 'INV-202402009',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'product_id' => 10,
                'supplier_id' => 5,
                'quantity' => 70,
                'contact' => 6282233445566,
                'invoice' => 'INV-202402010',
                'created_at' => now(),
                'updated_at' => now(),
            ],
        ];

        DB::table('purchases')->insert($purchases);
    }
}

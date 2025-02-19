<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class CustomersSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run()
    {
        DB::table('customers')->insert([
            [
                'name' => 'Andi Saputra',
                'email' => 'andi@example.com',
                'phone' => '081234567890',
                'address' => 'Jl. Merdeka No. 10, Jakarta'
            ],
            [
                'name' => 'Budi Santoso',
                'email' => 'budi@example.com',
                'phone' => '081298765432',
                'address' => 'Jl. Sudirman No. 20, Bandung'
            ],
            [
                'name' => 'Citra Lestari',
                'email' => 'citra@example.com',
                'phone' => '085678901234',
                'address' => 'Jl. Diponegoro No. 15, Surabaya'
            ],
            [
                'name' => 'Dewi Kusuma',
                'email' => 'dewi@example.com',
                'phone' => '087765432109',
                'address' => 'Jl. Gajah Mada No. 5, Yogyakarta'
            ],
            [
                'name' => 'Eka Pratama',
                'email' => 'eka@example.com',
                'phone' => '089876543210',
                'address' => 'Jl. Ahmad Yani No. 30, Semarang'
            ],
        ]);
    }
}

<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class produkSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('produk')->insert([
            'id_produk'  => 001,
            'nama_produk' => 'INSOM',
            'kategori' => 'TShirt',
            'harga_satuan' => 3500.00,
            'stok'       => 100,
            'satuan'       => 1,
            'created_at'   => now(),
            'updated_at'   => now(),
        ]);
    }
}

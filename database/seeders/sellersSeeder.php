<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class sellersSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('sellers')->insert([
            [
                'id_sellers' => 1,
                'nama_sellers' => 'Andi Setiawan',
                'email' => 'andi@tshirtstore.com',
                'no_hp' => '082134567890',
                'toko' => 'KaosKita Store',
                'alamat' => 'Jl. Ringroad Selatan No. 10, Bantul',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'id_sellers' => 2,
                'nama_sellers' => 'Budi Hartono',
                'email' => 'budi@kaosindie.com',
                'no_hp' => '081256789012',
                'toko' => 'KaosIndie',
                'alamat' => 'Jl. Magelang KM 7, Sleman',
                'created_at' => now(),
                'updated_at' => now(),
            ],
        ]);
    }
}
<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
class customersSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
                DB::table('customers')->insert([
            [
                'id_ctm' => 1,
                'nama_ctm' => 'Irfan Chori',
                'email' => 'irfan@example.com',
                'no_hp' => '081234567890',
                'alamat' => 'Jl. Malioboro No. 12, Yogyakarta',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'id_ctm' => 2,
                'nama_ctm' => 'Aulia Rahma',
                'email' => 'aulia@example.com',
                'no_hp' => '085678912345',
                'alamat' => 'Jl. Kaliurang KM 5, Sleman',
                'created_at' => now(),
                'updated_at' => now(),
            ],
        ]);
    }
}

<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class KeretaSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('kereta')->insert([
            [
                'nama_kereta' => 'Argo Bromo',
                'asal_kota' => 'Jakarta',
                'kota_tujuan' => 'Surabaya',
                'waktu_keberangkatan' => now(),
                'waktu_tiba' => now()->addHours(9)
            ],
            [
                'nama_kereta' => 'Taksaka',
                'asal_kota' => 'Yogyakarta',
                'kota_tujuan' => 'Jakarta',
                'waktu_keberangkatan' => now(),
                'waktu_tiba' => now()->addHours(6)
            ],
            // Add 8 more entries as needed
        ]);
    }
}

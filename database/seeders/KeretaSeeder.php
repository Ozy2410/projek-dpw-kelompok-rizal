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
        $data = [];
        $namaKereta = ['Argo Bromo', 'Taksaka', 'Gajayana', 'Malabar', 'Majapahit', 'Argo Wilis', 'Lodaya', 'Mutiara Timur', 'Serayu', 'Logawa'];
        $asalKota = ['Jakarta', 'Bandung', 'Surabaya', 'Malang', 'Yogyakarta'];
        $tujuanKota = ['Semarang', 'Solo', 'Blitar', 'Jember', 'Kediri'];

        for ($i = 1; $i <= 50; $i++) {
            $data[] = [
                'nama_kereta' => $namaKereta[array_rand($namaKereta)] . " $i",
                'asal_kota' => $asalKota[array_rand($asalKota)],
                'kota_tujuan' => $tujuanKota[array_rand($tujuanKota)],
                'waktu_keberangkatan' => now()->addHours(rand(1, 48)),
                'waktu_tiba' => now()->addHours(rand(49, 96)),
                'created_at' => now(),
                'updated_at' => now(),
            ];
        }

        DB::table('kereta')->insert($data);
    }
}

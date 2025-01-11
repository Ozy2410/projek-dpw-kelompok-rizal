<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class BookingSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('booking')->insert([
            [
                'id_user' => 1,
                'id_kereta' => 1,
                'nomor_kursi' => 'A1',
                'gerbong' => 'A'
            ],
            [
                'id_user' => 2,
                'id_kereta' => 2,
                'nomor_kursi' => 'B2',
                'gerbong' => 'B'
            ],
            // Add 8 more entries as needed
        ]);
    }
}

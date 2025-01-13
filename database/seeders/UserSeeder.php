<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;
use App\Models\User;

class UserSeeder extends Seeder
{
    public function run(): void
    {
        $users = [
            [
                'nama' => 'Admin User',
                'email' => 'admin@example.com',
                'password' => Hash::make('password'),
                'role' => 'admin',
                'created_at' => now(),
            ],
            [
                'nama' => 'John Doe',
                'email' => 'john@example.com',
                'password' => Hash::make('password'),
                'role' => 'member',
                'created_at' => now(),
            ],
            [
                'nama' => 'Jane Smith',
                'email' => 'jane@example.com',
                'password' => Hash::make('password'),
                'role' => 'member',
                'created_at' => now(),
            ],
            [
                'nama' => 'Azril',
                'email' => 'azril@gmail.com',
                'password' => Hash::make('password'),
                'role' => 'member',
                'created_at' => now(),
            ],
            // Tambahkan 7 entri lainnya sesuai kebutuhan
        ];

        foreach ($users as $user) {
            User::updateOrCreate(
                ['email' => $user['email']],
                $user
            );
        }
    }
}

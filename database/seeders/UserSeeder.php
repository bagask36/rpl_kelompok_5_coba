<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB; // Tambahkan ini
use Illuminate\Support\Facades\Hash; // Tambahkan ini
use Illuminate\Support\Str; // Tambahkan ini

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('users')->insert([
            'user_id' => (string) Str::uuid(), // Menambahkan user_id unik
            'name' => 'Bagas',
            'email' => 'admin@solusipajakonline.com',
            'password' => Hash::make('12345678'),
            'role' => 'admin',
        ]);
    }
}

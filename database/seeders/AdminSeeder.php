<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;

class AdminSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        User::create([
            'name' => 'Administrator',
            'email' => 'admin@test.com',
            'email_verified_at' => now(),
            'gender' => fake()->boolean() ? 'Laki-laki' : 'Perempuan',
            'address' => fake()->address(),
            'phone' => fake()->phoneNumber(),
            'role' => 'admin',
            'password' => Hash::make('admin123'),
        ]);
    }
}

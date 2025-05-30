<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;
use App\Models\User;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        User::create([
            'name' => 'Admin User',
            'email' => 'admin@example.com',
            'email_verified_at' => now(),
            'password' => Hash::make('password'), // You should change this password
            'role' => 'admin',
        ]);

        // You can add other users here if needed, for example, a test owner and tenant:
        /*
        User::create([
            'name' => 'Test Owner',
            'email' => 'owner@example.com',
            'email_verified_at' => now(),
            'password' => Hash::make('password'),
            'role' => 'owner',
        ]);

        User::create([
            'name' => 'Test Tenant',
            'email' => 'tenant@example.com',
            'email_verified_at' => now(),
            'password' => Hash::make('password'),
            'role' => 'tenant',
        ]);
        */
    }
} 
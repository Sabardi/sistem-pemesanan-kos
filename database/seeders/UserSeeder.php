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
        // Create Admin User only if it doesn't exist
        User::firstOrCreate(
            ['email' => 'admin@example.com'], // Conditions to find the user
            [
                'name' => 'Admin User',
                'email_verified_at' => now(),
                'password' => Hash::make('password'), // You should change this password
                'role' => 'admin',
            ]
        );

        // You can add other users here if needed, for example, a test owner and tenant:
        /*
        User::firstOrCreate([
            'email' => 'owner@example.com',
        ], [
            'name' => 'Test Owner',
            'email_verified_at' => now(),
            'password' => Hash::make('password'),
            'role' => 'owner',
        ]);

        User::firstOrCreate([
            'email' => 'tenant@example.com',
        ], [
            'name' => 'Test Tenant',
            'email_verified_at' => now(),
            'password' => Hash::make('password'),
            'role' => 'tenant',
        ]);
        */
    }
} 
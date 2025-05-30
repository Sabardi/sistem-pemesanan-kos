<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        // \App\Models\User::factory(10)->create();

        // \App\Models\User::factory()->create([
        //     'name' => 'Test User',
        //     'email' => 'test@example.com',
        // ]);

        $this->call([
            UserSeeder::class,
            // First, ensure Laravolt's data is seeded if not done globally
            // \Laravolt\Indonesia\Seeds\IndonesiaSeeder::class, // Optional: if you want to ensure it runs every time
            // NtbLocationSeeder::class, // Then seed our specific NTB locations
            // Add other seeders here if you create more
        ]);
    }
}

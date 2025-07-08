<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\User; // Make sure to import your User model

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // Use environment variables for admin credentials (safer)
        // Or create test data for development
        User::create([
            'name' => env('ADMIN_NAME', 'Admin User'),
            'email' => env('ADMIN_EMAIL', 'admin@example.com'),
            'password' => bcrypt(env('ADMIN_PASSWORD', 'password')),
        ]);

        // Create additional test users for development
        User::create([
            'name' => 'Test User',
            'email' => 'test@example.com',
            'password' => bcrypt('password'),
        ]);
    }
}

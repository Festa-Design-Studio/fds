<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;

class CreateAdminUserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        // Only create default admin in local/development
        // In production, admin users should be created manually with secure passwords
        if (app()->environment('local', 'development')) {
            User::create([
                'name' => 'Admin',
                'email' => 'admin@festa.local',
                'password' => Hash::make(\Illuminate\Support\Str::random(32)),
            ]);
            
            // Log the password only in local environment for development
            \Log::info('Development admin user created. Generate a secure password for production.');
        }
    }
}

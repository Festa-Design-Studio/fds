<?php

namespace Database\Seeders;

use App\Models\User;
// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        // Only seed test users in local/development environment
        if (app()->environment('local', 'development')) {
            User::factory()->create([
                'name' => 'Test User',
                'email' => 'test@example.com',
            ]);

            // Add development admin user (only for local testing)
            User::updateOrCreate(
                ['email' => 'admin@festa.local'],
                [
                    'name' => 'Development Admin',
                    'password' => \Illuminate\Support\Facades\Hash::make(\Illuminate\Support\Str::random(32)),
                    'email_verified_at' => now(),
                ]
            );
        }

        $this->call([
            TeamMemberSeeder::class,
            SectorIndustrySDGSeeder::class,
            ServicesSeeder::class,
            ServiceExpertiseSeeder::class,
            ServiceSectorContentSeeder::class,
        ]);
    }
}

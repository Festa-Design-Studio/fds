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
        // User::factory(10)->create();

        User::factory()->create([
            'name' => 'Test User',
            'email' => 'test@example.com',
        ]);

        // Add Abayomi user
        User::updateOrCreate(
            ['email' => 'abayomi@festa.design'],
            [
                'name' => 'Abayomi',
                'password' => \Illuminate\Support\Facades\Hash::make('Doctor99'),
                'email_verified_at' => now(),
            ]
        );

        $this->call([
            TeamMemberSeeder::class,
            SectorIndustrySDGSeeder::class,
            ServiceExpertiseSeeder::class,
            ServiceSectorContentSeeder::class,
        ]);
    }
}

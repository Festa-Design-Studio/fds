<?php

namespace Database\Seeders;

use App\Models\Client;
use App\Models\Project;
use Illuminate\Database\Seeder;

class TestClientProjectSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        // Create a test client
        $client = Client::create([
            'name' => 'Test Client',
            'slug' => 'test-client',
            'description' => 'This is a test client for development purposes.',
            'website' => 'https://example.com',
        ]);

        // Create test projects
        $project1 = Project::create([
            'title' => 'First Test Project',
            'slug' => 'first-test-project',
            'excerpt' => 'This is the excerpt for the first test project.',
            'content' => '
                <h2 class="text-h2 font-bold text-pepper-green">Objectives</h2>
                <p class="text-body-lg">These are the objectives for the first test project.</p>
                
                <h2 class="text-h2 font-bold text-pepper-green">The Challenge</h2>
                <p class="text-body-lg">These are the challenges faced during the first test project.</p>
                
                <h2 class="text-h2 font-bold text-pepper-green">The Solution</h2>
                <p class="text-body-lg">These are the solutions implemented for the first test project.</p>
                
                <h2 class="text-h2 font-bold text-pepper-green">The Results</h2>
                <p class="text-body-lg">These are the results achieved from the first test project.</p>
            ',
            'sector' => 'Nonprofit',
            'industry' => 'Research and Development',
            'sdg_alignment' => 'Quality Education',
            'client_id' => $client->id,
        ]);

        $project2 = Project::create([
            'title' => 'Second Test Project',
            'slug' => 'second-test-project',
            'excerpt' => 'This is the excerpt for the second test project.',
            'content' => '
                <h2 class="text-h2 font-bold text-pepper-green">Objectives</h2>
                <p class="text-body-lg">These are the objectives for the second test project.</p>
                
                <h2 class="text-h2 font-bold text-pepper-green">The Challenge</h2>
                <p class="text-body-lg">These are the challenges faced during the second test project.</p>
                
                <h2 class="text-h2 font-bold text-pepper-green">The Solution</h2>
                <p class="text-body-lg">These are the solutions implemented for the second test project.</p>
                
                <h2 class="text-h2 font-bold text-pepper-green">The Results</h2>
                <p class="text-body-lg">These are the results achieved from the second test project.</p>
            ',
            'sector' => 'Startup',
            'industry' => 'Technology',
            'sdg_alignment' => 'Sustainable Cities',
            'client_id' => $client->id,
        ]);
    }
}

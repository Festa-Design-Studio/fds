<?php

namespace Database\Seeders;

use App\Models\Service;
use Illuminate\Database\Seeder;

class ServiceExpertiseSeeder extends Seeder
{
    public function run(): void
    {
        $services = [
            'project_design' => [
                'expertise_title' => 'Project design expertise',
                'expertise_description' => 'Translating purpose into powerful visuals. We craft design systems and storytelling tools that speak clearly and connect deeply. Industries we\'ve worked in include:',
            ],
            'communication_design' => [
                'expertise_title' => 'Communication design expertise',
                'expertise_description' => 'We turn complex ideas into clear, engaging messages that resonate with your audience and drive action. Our communication solutions include:',
            ],
            'campaign_design' => [
                'expertise_title' => 'Campaign design expertise',
                'expertise_description' => 'From awareness to action, we design comprehensive campaigns that connect with audiences and deliver results. Our campaign capabilities include:',
            ],
        ];

        foreach ($services as $type => $expertise) {
            Service::where('type', $type)->update([
                'expertise_title' => $expertise['expertise_title'],
                'expertise_description' => $expertise['expertise_description'],
            ]);
        }
    }
}

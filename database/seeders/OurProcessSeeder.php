<?php

namespace Database\Seeders;

use App\Models\OurProcess;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class OurProcessSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        // Philosophy Principles
        $philosophyItems = [
            [
                'type' => 'philosophy',
                'title' => 'Purpose-Driven Design',
                'description' => 'Every design decision we make is intentionally aligned with our clients\' missions for social good. We believe that effective design must serve a greater purpose beyond aesthetics.',
                'order_index' => 1,
                'is_active' => true,
            ],
            [
                'type' => 'philosophy',
                'title' => 'Human-Centered Approach',
                'description' => 'We place people at the heart of our design process, deeply understanding the needs of both our clients and their target audiences to create solutions that genuinely resonate and drive engagement.',
                'order_index' => 2,
                'is_active' => true,
            ],
            [
                'type' => 'philosophy',
                'title' => 'Impact-Focused Solutions',
                'description' => 'Our designs are crafted to deliver measurable results. We combine creative excellence with strategic thinking to create solutions that advance our clients\' goals for positive social change.',
                'order_index' => 3,
                'is_active' => true,
            ],
        ];

        // Methodology Steps
        $methodologyItems = [
            [
                'type' => 'methodology',
                'title' => 'Discovery',
                'description' => 'The initial discovery period where we learn about your organization and craft a tailored proposal that aligns with your goals and budget.',
                'step_number' => 1,
                'order_index' => 1,
                'is_active' => true,
            ],
            [
                'type' => 'methodology',
                'title' => 'Agreement',
                'description' => 'A structured process to formalize our partnership through detailed discussions, documentation, and contract signing.',
                'step_number' => 2,
                'order_index' => 2,
                'is_active' => true,
            ],
            [
                'type' => 'methodology',
                'title' => 'Research',
                'description' => 'Deep research and collaborative planning to develop a comprehensive understanding of your needs and create an effective design strategy.',
                'step_number' => 3,
                'order_index' => 3,
                'is_active' => true,
            ],
            [
                'type' => 'methodology',
                'title' => 'Design & Build',
                'description' => 'An iterative design process with regular feedback loops and structured reviews, culminating in careful execution with proper documentation.',
                'step_number' => 4,
                'order_index' => 4,
                'is_active' => true,
            ],
            [
                'type' => 'methodology',
                'title' => 'Optimization',
                'description' => 'Thorough evaluation of results against success metrics, with detailed reporting and ongoing support to ensure lasting impact.',
                'step_number' => 5,
                'order_index' => 5,
                'is_active' => true,
            ],
        ];

        // Impact Metrics
        $impactItems = [
            [
                'type' => 'impact',
                'title' => 'Organizations empowered',
                'description' => 'Tracking the number of organizations served through our design solutions.',
                'metric_type' => 'Count',
                'icon' => '<svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17 20h5v-2a3 3 0 00-5.356-1.857M17 20H7m10 0v-2c0-.656-.126-1.283-.356-1.857M7 20H2v-2a3 3 0 015.356-1.857M7 20v-2c0-.656.126-1.283.356-1.857m0 0a5.002 5.002 0 019.288 0M15 7a3 3 0 11-6 0 3 3 0 016 0zm6 3a2 2 0 11-4 0 2 2 0 014 0zM7 10a2 2 0 11-4 0 2 2 0 014 0z"/></svg>',
                'order_index' => 1,
                'is_active' => true,
            ],
            [
                'type' => 'impact',
                'title' => 'Performance improvements',
                'description' => 'Measuring improvements in client organizations\' key performance indicators (engagement rates, fundraising success, program participation).',
                'metric_type' => 'Percentage',
                'icon' => '<svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 19v-6a2 2 0 00-2-2H5a2 2 0 00-2 2v6a2 2 0 002 2h2a2 2 0 002-2zm0 0V9a2 2 0 012-2h2a2 2 0 012 2v10m-6 0a2 2 0 002 2h2a2 2 0 002-2m0 0V5a2 2 0 012-2h2a2 2 0 012 2v14a2 2 0 01-2 2h-2a2 2 0 01-2-2z"/></svg>',
                'order_index' => 2,
                'is_active' => true,
            ],
            [
                'type' => 'impact',
                'title' => 'Client satisfaction',
                'description' => 'Collecting satisfaction scores and qualitative feedback on our design services\' impact.',
                'metric_type' => 'Score',
                'icon' => '<svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4.318 6.318a4.5 4.5 0 000 6.364L12 20.364l7.682-7.682a4.5 4.5 0 00-6.364-6.364L12 7.636l-1.318-1.318a4.5 4.5 0 00-6.364 0z"/></svg>',
                'order_index' => 3,
                'is_active' => true,
            ],
            [
                'type' => 'impact',
                'title' => 'Impact case studies',
                'description' => 'Developing detailed case studies showing tangible social impact achieved.',
                'metric_type' => 'Case Studies',
                'icon' => '<svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5H7a2 2 0 00-2 2v10a2 2 0 002 2h8a2 2 0 002-2V7a2 2 0 00-2-2h-2M9 5a2 2 0 002 2h2a2 2 0 002-2M9 5a2 2 0 012-2h2a2 2 0 012 2m-6 9l2 2 4-4"/></svg>',
                'order_index' => 4,
                'is_active' => true,
            ],
            [
                'type' => 'impact',
                'title' => 'Accessibility Growth',
                'description' => 'Monitoring the accessibility of our services across organizations of varying sizes and budgets.',
                'metric_type' => 'Reach',
                'icon' => '<svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M13 10V3L4 14h7v7l9-11h-7z"/></svg>',
                'order_index' => 5,
                'is_active' => true,
            ],
        ];

        // Create all items
        foreach ($philosophyItems as $item) {
            OurProcess::create($item);
        }

        foreach ($methodologyItems as $item) {
            OurProcess::create($item);
        }

        foreach ($impactItems as $item) {
            OurProcess::create($item);
        }
    }
}

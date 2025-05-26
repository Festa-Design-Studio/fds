<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Service;
use App\Models\ServiceSector;

class ServicesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        // Create main services
        $services = [
            [
                'type' => 'project_design',
                'title' => 'Project Design',
                'description' => 'Designing for impact and clarity',
                'content' => 'We partner with nonprofits and purpose-led teams to co-create strong project frameworks, strategies, and funding narratives that drive real change.',
                'is_active' => true,
                'display_order' => 1,
                'deliverables' => [
                    [
                        'title' => 'Theory of change',
                        'description' => 'Clarify your long-term vision and back it up with measurable.',
                        'display_order' => 1
                    ],
                    [
                        'title' => 'Grant writing support',
                        'description' => 'Transform your project ideas into compelling funding proposals.',
                        'display_order' => 2
                    ],
                    [
                        'title' => 'Logframe design',
                        'description' => 'Structure your goals, indicators, and assumptions with clarity.',
                        'display_order' => 3
                    ],
                    [
                        'title' => 'Workplans & Budgets',
                        'description' => 'Break down your project into manageable actions and resource needs.',
                        'display_order' => 4
                    ],
                    [
                        'title' => 'M&E Frameworks',
                        'description' => 'Track, measure, and report on progress with purpose and precision.',
                        'display_order' => 5
                    ],
                    [
                        'title' => 'Project Reviews',
                        'description' => 'Evaluate project plans or past performance with expert insights.',
                        'display_order' => 6
                    ]
                ]
            ],
            [
                'type' => 'communication_design',
                'title' => 'Communication Design',
                'description' => 'Crafting clear and compelling messages',
                'content' => 'We help purpose-driven organizations communicate their vision effectively through strategic messaging and powerful visual storytelling.',
                'is_active' => true,
                'display_order' => 2,
                'deliverables' => [
                    [
                        'title' => 'Brand Strategy',
                        'description' => 'Define your unique voice and positioning in a crowded marketplace.',
                        'display_order' => 1
                    ],
                    [
                        'title' => 'Visual Identity',
                        'description' => 'Create cohesive visual systems that express your organization\'s values.',
                        'display_order' => 2
                    ],
                    [
                        'title' => 'Content Strategy',
                        'description' => 'Plan and produce content that engages your audience across channels.',
                        'display_order' => 3
                    ],
                    [
                        'title' => 'Messaging Frameworks',
                        'description' => 'Develop consistent, audience-focused messaging that drives action.',
                        'display_order' => 4
                    ],
                    [
                        'title' => 'Report Design',
                        'description' => 'Transform complex data into visually compelling, accessible reports.',
                        'display_order' => 5
                    ],
                    [
                        'title' => 'Digital Storytelling',
                        'description' => 'Share your impact through powerful narratives that connect emotionally.',
                        'display_order' => 6
                    ]
                ]
            ],
            [
                'type' => 'campaign_design',
                'title' => 'Campaign Design',
                'description' => 'Driving purposeful engagement and action',
                'content' => 'We design strategic campaigns that mobilize audiences, change behaviors, and create measurable impact for mission-driven organizations.',
                'is_active' => true,
                'display_order' => 3,
                'deliverables' => [
                    [
                        'title' => 'Campaign Strategy',
                        'description' => 'Define clear objectives, audience targeting, and measurement frameworks.',
                        'display_order' => 1
                    ],
                    [
                        'title' => 'Multichannel Planning',
                        'description' => 'Create integrated experiences across digital, social, and traditional media.',
                        'display_order' => 2
                    ],
                    [
                        'title' => 'Fundraising Campaigns',
                        'description' => 'Develop compelling appeals that inspire generosity and participation.',
                        'display_order' => 3
                    ],
                    [
                        'title' => 'Behavior Change Design',
                        'description' => 'Apply behavioral insights to create campaigns that shift attitudes and actions.',
                        'display_order' => 4
                    ],
                    [
                        'title' => 'Advocacy Campaigns',
                        'description' => 'Mobilize supporters to drive policy change and social progress.',
                        'display_order' => 5
                    ],
                    [
                        'title' => 'Impact Reporting',
                        'description' => 'Share campaign results through compelling visuals and storytelling.',
                        'display_order' => 6
                    ]
                ]
            ]
        ];

        foreach ($services as $serviceData) {
            $deliverables = $serviceData['deliverables'];
            unset($serviceData['deliverables']);
            
            $service = Service::create($serviceData);
            
            foreach ($deliverables as $deliverable) {
                $service->deliverables()->create($deliverable);
            }
        }

        // Create sectors
        $sectors = [
            [
                'type' => 'nonprofit',
                'title' => 'Nonprofit Sector',
                'description' => 'Supporting missions that drive social change with impactful design solutions.',
                'content' => 'Amplify your nonprofit\'s voice through purpose-driven design that speaks louder than words. We help you communicate complex missions effectively and enhance donor engagement.',
                'challenges_content' => 'Understanding the real barriers nonprofits face—and how Festa empowers impact through design, branding, and digital strategy.',
                'expertise_content' => 'Our specialized expertise helps nonprofits maximize their impact through strategic design and digital solutions.',
                'is_active' => true,
                'display_order' => 1
            ],
            [
                'type' => 'startup',
                'title' => 'Startup Sector',
                'description' => 'Helping purpose-driven businesses scale their impact through effective design.',
                'content' => 'Transform your startup vision into compelling visual narratives that attract investors, engage customers, and drive sustainable growth. We help purpose-driven startups communicate their value effectively.',
                'challenges_content' => 'Understanding the unique obstacles startups face—and how Festa helps purpose-driven startups establish trust, attract investment, and scale effectively through strategic design.',
                'expertise_content' => 'Our specialized expertise helps startups build strong brands, attract investment, and scale effectively through strategic design.',
                'is_active' => true,
                'display_order' => 2
            ]
        ];

        foreach ($sectors as $sector) {
            ServiceSector::create($sector);
        }
    }
}

<?php

namespace Database\Seeders;

use App\Models\DesignForGoodContent;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DesignForGoodContentSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DesignForGoodContent::create([
            'section_key' => 'hero',
            'title' => 'We Design for Good',
            'subtitle' => 'Creating positive social impact through purposeful design',
            'description' => 'At Festa Design Studio, we believe in the transformative power of purposeful design to create positive social change. Our commitment to "Design for Good" is embedded in every aspect of our work.',
            'content_data' => json_encode([
                'background_color' => 'pepper-green-600',
                'text_color' => 'white-smoke',
                'alignment' => 'center'
            ]),
            'display_order' => 1,
            'is_active' => true,
        ]);

        DesignForGoodContent::create([
            'section_key' => 'mission',
            'title' => 'Vision & Purpose',
            'subtitle' => 'Empowering organizations through strategic design',
            'description' => 'We envision a world where purpose-driven organizations are empowered through strategic design to maximize their social impact. Our approach aligns design solutions with the United Nations Sustainable Development Goals, ensuring every project contributes to broader positive change.',
            'content_data' => json_encode([
                'icon' => 'target',
                'features' => [
                    'Strategic design alignment with UN SDGs',
                    'Purpose-driven organizational empowerment',
                    'Maximized social impact through design',
                    'Broader positive change contribution'
                ]
            ]),
            'display_order' => 2,
            'is_active' => true,
        ]);

        DesignForGoodContent::create([
            'section_key' => 'impact_framework',
            'title' => 'Strategic Impact Framework',
            'subtitle' => 'From expertise to outcomes',
            'description' => 'Our comprehensive approach transforms missions into impactful visual narratives through collaborative workshops and customized design solutions.',
            'content_data' => json_encode([
                'framework_steps' => [
                    [
                        'stage' => 'Input',
                        'title' => 'Expertise & Research',
                        'description' => 'We bring expertise in UX research, design thinking, and ethical design practices to every project.',
                        'icon' => 'lightbulb'
                    ],
                    [
                        'stage' => 'Process',
                        'title' => 'Collaborative Solutions',
                        'description' => 'Through collaborative workshops and customized design solutions, we transform missions into impactful visual narratives.',
                        'icon' => 'users'
                    ],
                    [
                        'stage' => 'Outcome',
                        'title' => 'Strengthened Capacity',
                        'description' => 'Our work strengthens organizations\' capacity to fulfill their missions and drive meaningful change.',
                        'icon' => 'trending-up'
                    ]
                ]
            ]),
            'display_order' => 3,
            'is_active' => true,
        ]);

        DesignForGoodContent::create([
            'section_key' => 'values',
            'title' => 'Value Creation',
            'subtitle' => 'Delivering meaningful impact',
            'description' => 'We deliver value through strategic design solutions that amplify social impact, optimize resources, and create authentic connections with diverse communities.',
            'content_data' => json_encode([
                'values' => [
                    [
                        'title' => 'Strategic Impact Amplification',
                        'description' => 'Strategic design solutions that amplify social impact and organizational effectiveness.',
                        'icon' => 'trending-up'
                    ],
                    [
                        'title' => 'Resource Optimization',
                        'description' => 'Resource-optimized approaches that maximize limited budgets and deliver exceptional value.',
                        'icon' => 'dollar-sign'
                    ],
                    [
                        'title' => 'Cultural Sensitivity',
                        'description' => 'Culturally-sensitive design that authentically connects with diverse communities.',
                        'icon' => 'globe'
                    ],
                    [
                        'title' => 'Impact Measurement',
                        'description' => 'Impact measurement frameworks that demonstrate real-world results and tangible outcomes.',
                        'icon' => 'bar-chart'
                    ]
                ],
                'metrics' => [
                    'Number of purpose-driven organizations empowered',
                    'Improvements in client organizations\' key performance indicators',
                    'Growth in accessibility of our services',
                    'Documented case studies of positive social change'
                ]
            ]),
            'display_order' => 4,
            'is_active' => true,
        ]);
    }
}
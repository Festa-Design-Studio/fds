<?php

namespace Database\Seeders;

use App\Models\ServiceSector;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class ServiceSectorContentSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        // Update Nonprofit Sector
        ServiceSector::where('type', 'nonprofit')->update([
            // Hero Section
            'hero_eyebrow' => 'Empowering nonprofits',
            'hero_title' => 'Transform your mission Into visual impact',
            'hero_description' => 'Amplify your nonprofit\'s voice through purpose-driven design that speaks louder than words. We help you communicate complex missions effectively and enhance donor engagement.',
            'hero_button_text' => 'Start Your Impact Journey',
            
            // Challenge Section
            'challenge_eyebrow' => 'Sector challenges',
            'challenge_title' => 'Navigating Limited Resources with Purpose-Driven Design',
            'challenge_description' => 'Understanding the real barriers nonprofits face—and how Festa empowers impact through design, branding, and digital strategy.',
            
            // Expertise Section
            'expertise_eyebrow' => 'Sector expertise',
            'expertise_title' => 'Strategic Design Solutions for Nonprofits',
            'expertise_description' => 'Our specialized expertise helps nonprofits maximize their impact through strategic design and digital solutions.',
            'expertise_items' => json_encode([
                [
                    'title' => 'Theory of Change Development',
                    'intro' => 'Transform your organization\'s vision into actionable strategy with expert guidance in:',
                    'points' => [
                        'Logic model creation and refinement',
                        'Impact measurement framework design',
                        'Outcome mapping and visualization',
                        'Stakeholder engagement planning'
                    ],
                    'conclusion' => 'Using Festa\'s design system, we create clear, engaging visualizations that make your theory of change accessible and actionable for all stakeholders.'
                ],
                [
                    'title' => 'UI Design System Implementation',
                    'intro' => 'Build a cohesive digital presence that amplifies your mission through:',
                    'points' => [
                        'Custom UI component libraries',
                        'Accessible color systems',
                        'Typography hierarchies for impact',
                        'Responsive layout frameworks'
                    ],
                    'conclusion' => 'We craft design systems that reflect your organization\'s values while ensuring consistency and accessibility across all digital touchpoints.'
                ]
            ])
        ]);

        // Update Startup Sector
        ServiceSector::where('type', 'startup')->update([
            // Hero Section
            'hero_eyebrow' => 'Empowering Purpose-driven Startups',
            'hero_title' => 'Scale Your Impact Through Strategic Design',
            'hero_description' => 'Transform your startup vision into compelling visual narratives that attract investors, engage customers, and drive sustainable growth. We help purpose-driven startups communicate their value effectively.',
            'hero_button_text' => 'Launch Your Vision',
            
            // Challenge Section
            'challenge_eyebrow' => 'Startup sector challenges',
            'challenge_title' => 'Building Credibility While Scaling Fast',
            'challenge_description' => 'Understanding the unique obstacles startups face—and how Festa helps purpose-driven startups establish trust, attract investment, and scale effectively through strategic design.',
            'challenge_items' => json_encode([
                [
                    'icon' => '<path d="M12 8V4l8 8-8 8v-4H4v-8z"/>',
                    'title' => 'Market Differentiation',
                    'description' => '78% of startups struggle to clearly communicate their unique value proposition in crowded markets.',
                    'source' => 'Startup Marketing Report 2023',
                    'sourceUrl' => 'https://startupmarketing.org/report-2023'
                ],
                [
                    'icon' => '<path d="M12 2C6.48 2 2 6.48 2 12s4.48 10 10 10 10-4.48 10-10S17.52 2 12 2zm-2 15l-5-5 1.41-1.41L10 14.17l7.59-7.59L19 8l-9 9z"/>',
                    'title' => 'Investor Confidence',
                    'description' => '65% of early-stage startups cite difficulty in creating compelling pitch materials that build investor trust.',
                    'source' => 'Venture Capital Study 2023',
                    'sourceUrl' => 'https://vcinsights.org/startup-study-2023'
                ],
                [
                    'icon' => '<path d="M16 7a4 4 0 11-8 0 4 4 0 018 0zM12 14a7 7 0 00-7 7h14a7 7 0 00-7-7z"/>',
                    'title' => 'Customer Acquisition',
                    'description' => '71% of purpose-driven startups find it challenging to convert their mission into customer engagement and retention.',
                    'source' => 'Purpose Business Study 2023',
                    'sourceUrl' => 'https://purposebusiness.org/study-2023'
                ],
                [
                    'icon' => '<path d="M13 10V3L4 14h7v7l9-11h-7z"/>',
                    'title' => 'Rapid Scaling',
                    'description' => '59% of growing startups struggle to maintain brand consistency and quality while scaling operations quickly.',
                    'source' => 'Scale-up Challenges Report 2023',
                    'sourceUrl' => 'https://scaleupinsights.org/challenges-2023'
                ]
            ]),
            
            // Expertise Section
            'expertise_eyebrow' => 'Startup expertise',
            'expertise_title' => 'Strategic Design Solutions for Startups',
            'expertise_description' => 'Our specialized expertise helps startups build strong brands, attract investment, and scale effectively through strategic design.',
            'expertise_items' => json_encode([
                [
                    'title' => 'Brand Identity Development',
                    'intro' => 'Build a compelling brand that resonates with your target audience through:',
                    'points' => [
                        'Visual identity system creation',
                        'Brand voice and messaging strategy',
                        'Brand guidelines documentation',
                        'Marketing collateral design'
                    ],
                    'conclusion' => 'We help startups create distinctive, scalable brand identities that stand out in competitive markets and build lasting connections with customers.'
                ],
                [
                    'title' => 'Investor Pitch Design',
                    'intro' => 'Create compelling pitch materials that win investor confidence through:',
                    'points' => [
                        'Pitch deck design and storytelling',
                        'Financial visualization design',
                        'Impact metrics presentation',
                        'Interactive presentation tools'
                    ],
                    'conclusion' => 'Our pitch design expertise helps startups communicate their value proposition effectively and build trust with potential investors.'
                ]
            ])
        ]);
    }
}

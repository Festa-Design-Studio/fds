<?php

namespace Database\Seeders;

use App\Models\PageSeo;
use Illuminate\Database\Seeder;

class PageSeoSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $pages = [
            [
                'page_identifier' => 'home',
                'page_title' => 'Home Page',
                'meta_description' => 'Strategic design studio specializing in nonprofit and social impact design. Transform your mission into visual impact with project design, communication design, and campaign design services.',
                'meta_keywords' => 'design for good, nonprofit design, social impact design, purpose-driven design, project design, communication design, campaign design',
                'og_title' => 'Festa Design Studio - Design for Social Impact',
                'og_description' => 'Strategic design studio specializing in nonprofit and social impact design. Transform your mission into visual impact with expert design solutions.',
                'og_image' => null, // Will use fallback in template
                'twitter_title' => 'Festa Design Studio - Design for Social Impact',
                'twitter_description' => 'Strategic design studio specializing in nonprofit and social impact design. Transform your mission into visual impact.',
                'twitter_image' => null, // Will use fallback in template
                'structured_data' => null, // Will use default in template
            ],
            [
                'page_identifier' => 'about',
                'page_title' => 'About Us',
                'meta_description' => 'Meet the design team behind Festa Design Studio. We create strategic design solutions for nonprofits, startups, and social impact organizations worldwide.',
                'meta_keywords' => 'about festa design studio, design team, nonprofit design agency, social impact designers, design for good team',
                'og_title' => 'About Us - Festa Design Studio',
                'og_description' => 'Meet the design team behind Festa Design Studio. We create strategic design solutions for nonprofits, startups, and social impact organizations worldwide.',
                'og_image' => null,
                'twitter_title' => 'About Us - Festa Design Studio',
                'twitter_description' => 'Meet the design team behind Festa Design Studio. Strategic design solutions for social impact organizations.',
                'twitter_image' => null,
                'structured_data' => null,
            ],
            [
                'page_identifier' => 'design_for_good',
                'page_title' => 'We Design for Good',
                'meta_description' => 'Discover Festa Design Studio\'s commitment to creating meaningful impact through design. Learn about our mission, values, and approach to social change through purposeful design solutions.',
                'meta_keywords' => 'design for good, social impact design, sustainable design, nonprofit design, ethical design, social change, SDG alignment, purposeful design',
                'og_title' => 'We Design for Good - Festa Design Studio',
                'og_description' => 'Our commitment to creating meaningful impact through design extends beyond aesthetics to address real-world challenges and drive positive social change across communities worldwide.',
                'og_image' => null,
                'twitter_title' => 'We Design for Good - Festa Design Studio',
                'twitter_description' => 'Our commitment to creating meaningful impact through design extends beyond aesthetics to address real-world challenges and drive positive social change.',
                'twitter_image' => null,
                'structured_data' => [
                    '@context' => 'https://schema.org',
                    '@type' => 'AboutPage',
                    'name' => 'We Design for Good',
                    'description' => 'Festa Design Studio\'s commitment to creating meaningful impact through design, addressing real-world challenges and driving positive social change.',
                    'url' => '/about/we-design-for-good',
                    'mainEntity' => [
                        '@type' => 'Organization',
                        'name' => 'Festa Design Studio',
                        'description' => 'Strategic design studio specializing in nonprofit and social impact design solutions',
                        'url' => '/',
                        'foundingDate' => '2020',
                        'slogan' => 'Design for Good',
                        'knowsAbout' => [
                            'Social Impact Design',
                            'Nonprofit Design',
                            'Sustainable Design',
                            'Ethical Design',
                            'Project Design',
                            'Communication Design',
                            'Campaign Design'
                        ],
                        'hasOfferCatalog' => [
                            '@type' => 'OfferCatalog',
                            'name' => 'Design for Good Services',
                            'itemListElement' => [
                                [
                                    '@type' => 'Offer',
                                    'itemOffered' => [
                                        '@type' => 'Service',
                                        'name' => 'Strategic Impact Design',
                                        'description' => 'Design solutions aligned with organizational goals and social impact objectives'
                                    ]
                                ],
                                [
                                    '@type' => 'Offer',
                                    'itemOffered' => [
                                        '@type' => 'Service',
                                        'name' => 'Ethical Design Framework',
                                        'description' => 'Design guided by principles of accessibility, inclusivity, and sustainability'
                                    ]
                                ]
                            ]
                        ]
                    ]
                ],
            ],
            [
                'page_identifier' => 'contact',
                'page_title' => 'Contact',
                'meta_description' => 'Get in touch with Festa Design Studio. Ready to transform your mission into visual impact? Contact our design team for nonprofit, startup, and social impact design projects.',
                'meta_keywords' => 'contact festa design studio, nonprofit design consultation, social impact design contact, design for good contact',
                'og_title' => 'Contact Us - Festa Design Studio',
                'og_description' => 'Get in touch with Festa Design Studio. Ready to transform your mission into visual impact? Contact our design team for social impact projects.',
                'og_image' => null,
                'twitter_title' => 'Contact Us - Festa Design Studio',
                'twitter_description' => 'Get in touch with Festa Design Studio. Ready to transform your mission into visual impact?',
                'twitter_image' => null,
                'structured_data' => null,
            ],
            [
                'page_identifier' => 'blog_index',
                'page_title' => 'Blog Index',
                'meta_description' => 'Explore insights, stories, and resources on design for social impact. Read our latest articles on nonprofit design, project design, and creating meaningful change.',
                'meta_keywords' => 'design blog, nonprofit design articles, social impact design, design for good resources, project design insights',
                'og_title' => 'Blog - Festa Design Studio',
                'og_description' => 'Explore insights, stories, and resources on design for social impact. Read our latest articles on nonprofit design and creating meaningful change.',
                'og_image' => null,
                'twitter_title' => 'Blog - Festa Design Studio',
                'twitter_description' => 'Explore insights, stories, and resources on design for social impact. Read our latest articles on nonprofit design.',
                'twitter_image' => null,
                'structured_data' => null,
            ],
            [
                'page_identifier' => 'toolkit',
                'page_title' => 'Toolkit',
                'meta_description' => 'Discover free design tools and resources for nonprofits and social impact organizations. Access templates, guides, and design assets to enhance your mission.',
                'meta_keywords' => 'nonprofit design tools, free design resources, social impact toolkit, design templates, nonprofit resources',
                'og_title' => 'Toolkit - Festa Design Studio',
                'og_description' => 'Discover free design tools and resources for nonprofits and social impact organizations. Access templates, guides, and design assets.',
                'og_image' => null,
                'twitter_title' => 'Toolkit - Festa Design Studio',
                'twitter_description' => 'Discover free design tools and resources for nonprofits and social impact organizations.',
                'twitter_image' => null,
                'structured_data' => null,
            ],
        ];

        foreach ($pages as $page) {
            PageSeo::updateOrCreate(
                ['page_identifier' => $page['page_identifier']],
                $page
            );
        }
    }
}
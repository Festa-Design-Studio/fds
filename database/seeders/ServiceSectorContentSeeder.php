<?php

namespace Database\Seeders;

use App\Models\ServiceSector;
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
            'hero_eyebrow' => 'Transform grant rejections into funding success',
            'hero_title' => 'Turn unclear missions into compelling funding narratives',
            'hero_description' => 'Stop losing funding due to poor project design clarity. 94% of funders make decisions based on visual presentation, yet most nonprofits waste hundreds of hours annually on unclear grant proposals that get rejected.',
            'hero_button_text' => 'Get Fundable Design',

            // Challenge Section
            'challenge_eyebrow' => 'The hidden cost of poor design',
            'challenge_title' => 'Why nonprofits lose funding due to design clarity gaps',
            'challenge_description' => 'Unclear project design is the #1 cause of grant rejection. When objectives are vague, funders cannot understand your impact—leading to systematic funding losses and wasted organizational resources.',
            'challenge_items' => json_encode([
                [
                    'icon' => '<path d="M12 8V4l8 8-8 8v-4H4v-8z"/>',
                    'title' => 'Grant Rejection Due to Unclear Objectives',
                    'description' => 'Lack of clear goals and objectives is the most common pitfall in grant writing, leading to confusion for funders and systematic proposal rejection.',
                    'source' => 'FundsForNGOs Grant Writing Study 2024',
                    'sourceUrl' => 'https://fundsforngos.org/grant-writing-study',
                ],
                [
                    'icon' => '<path d="M12 2C6.48 2 2 6.48 2 12s4.48 10 10 10 10-4.48 10-10S17.52 2 12 2zm-2 15l-5-5 1.41-1.41L10 14.17l7.59-7.59L19 8l-9 9z"/>',
                    'title' => 'Donor Confusion From Poor Visual Communication',
                    'description' => '94% of first impressions are based on visual design. Poor communication creates donor confusion and reduces willingness to invest in unclear initiatives.',
                    'source' => 'Nonprofit Pro Branding Impact Study 2024',
                    'sourceUrl' => 'https://nonprofitpro.com/branding-impact-study',
                ],
                [
                    'icon' => '<path d="M16 7a4 4 0 11-8 0 4 4 0 018 0zM12 14a7 7 0 00-7 7h14a7 7 0 00-7-7z"/>',
                    'title' => 'Resource Waste on Funding Coordination',
                    'description' => 'Organizations waste hundreds of hours annually trying to coordinate funding sources due to unclear project presentation and communication gaps.',
                    'source' => 'Stanford Social Innovation Review 2024',
                    'sourceUrl' => 'https://ssir.org/nonprofit-starvation-cycle',
                ],
                [
                    'icon' => '<path d="M13 10V3L4 14h7v7l9-11h-7z"/>',
                    'title' => 'Inability to Measure and Communicate Impact',
                    'description' => 'When organizations lack well-defined goals, measuring success becomes impossible, leading to continued funding challenges and stakeholder confusion.',
                    'source' => 'Center for Effective Philanthropy 2024',
                    'sourceUrl' => 'https://cep.org/state-of-nonprofits-2024',
                ],
            ]),

            // Expertise Section
            'expertise_eyebrow' => 'From funding rejection to success',
            'expertise_title' => 'Design solutions that win grants and engage donors',
            'expertise_description' => 'Transform vague objectives into compelling, fundable project presentations. Our specialized approach helps nonprofits communicate impact clearly, reducing grant rejection rates and increasing donor confidence.',
            'expertise_items' => json_encode([
                [
                    'title' => 'Grant-Ready Project Design',
                    'intro' => 'Transform unclear objectives into compelling, fundable proposals through:',
                    'points' => [
                        'SMART objectives development and visualization',
                        'Impact measurement framework design',
                        'Clear project timeline and milestone mapping',
                        'Funder-focused presentation templates',
                    ],
                    'conclusion' => 'We help nonprofits create crystal-clear project presentations that eliminate funder confusion and dramatically improve grant success rates.',
                ],
                [
                    'title' => 'Donor Engagement Visual Systems',
                    'intro' => 'Build trust and engagement through professional visual communication:',
                    'points' => [
                        'Impact storytelling through infographics',
                        'Donor-focused annual report design',
                        'Campaign materials that drive action',
                        'Digital presence optimization for trust',
                    ],
                    'conclusion' => 'Our visual systems ensure your mission is communicated clearly, building donor confidence and increasing willingness to invest in your cause.',
                ],
            ]),
        ]);

        // Update Startup Sector
        ServiceSector::where('type', 'startup')->update([
            // Hero Section
            'hero_eyebrow' => 'Beat the 90% startup failure rate',
            'hero_title' => 'Design that converts investors and customers before you run out of runway',
            'hero_description' => 'Poor branding contributes to 90% of startup failures. Don\'t let inconsistent design cost you 23% of potential revenue or investor confidence. Get the visual credibility that turns skeptics into supporters.',
            'hero_button_text' => 'Secure Investor Design',

            // Challenge Section
            'challenge_eyebrow' => 'Why startups fail from poor design',
            'challenge_title' => 'The revenue and investment losses from brand inconsistency',
            'challenge_description' => '14% of startups fail due to poor marketing, while 80% without marketing budgets fail entirely. Brand inconsistency alone costs startups up to 23% of potential revenue and destroys investor confidence.',
            'challenge_items' => json_encode([
                [
                    'icon' => '<path d="M12 8V4l8 8-8 8v-4H4v-8z"/>',
                    'title' => 'Revenue Loss from Brand Inconsistency',
                    'description' => 'Consistent branding increases revenue by up to 23%. Brand inconsistency directly costs startups this potential revenue growth and competitive advantage.',
                    'source' => 'Branding Statistics Report 2024',
                    'sourceUrl' => 'https://brandingstatistics.org/report-2024',
                ],
                [
                    'icon' => '<path d="M12 2C6.48 2 2 6.48 2 12s4.48 10 10 10 10-4.48 10-10S17.52 2 12 2zm-2 15l-5-5 1.41-1.41L10 14.17l7.59-7.59L19 8l-9 9z"/>',
                    'title' => 'Investor Rejection Due to Poor Presentation',
                    'description' => '57% of users won\'t recommend businesses with poorly designed presentations. Poor visual design creates investor skepticism and funding rejection.',
                    'source' => 'Startup Investor Study 2024',
                    'sourceUrl' => 'https://startupinvestor.org/design-study-2024',
                ],
                [
                    'icon' => '<path d="M16 7a4 4 0 11-8 0 4 4 0 018 0zM12 14a7 7 0 00-7 7h14a7 7 0 00-7-7z"/>',
                    'title' => 'Customer Trust Breakdown',
                    'description' => '64% of customers stop buying from brands with poor reputation. Inconsistent design damages credibility and customer acquisition efforts.',
                    'source' => 'Consumer Trust Report 2024',
                    'sourceUrl' => 'https://consumertrust.org/branding-impact-2024',
                ],
                [
                    'icon' => '<path d="M13 10V3L4 14h7v7l9-11h-7z"/>',
                    'title' => 'Marketing Budget Waste',
                    'description' => '80% of startups without marketing budgets fail. Poor design wastes limited marketing resources and reduces campaign effectiveness by up to 50%.',
                    'source' => 'Startup Failure Analysis 2024',
                    'sourceUrl' => 'https://startupfailure.org/marketing-analysis-2024',
                ],
            ]),

            // Expertise Section
            'expertise_eyebrow' => 'From failure to funding success',
            'expertise_title' => 'Design systems that convert investors and scale revenue',
            'expertise_description' => 'Stop losing 23% of potential revenue to brand inconsistency. Our investor-grade design systems help startups build credibility, secure funding, and scale effectively without the brand chaos that kills growth.',
            'expertise_items' => json_encode([
                [
                    'title' => 'Investor-Ready Brand Systems',
                    'intro' => 'Build credibility that converts skeptical investors into supporters through:',
                    'points' => [
                        'Professional visual identity systems that build trust',
                        'Scalable brand guidelines for consistent growth',
                        'Investor presentation templates that convert',
                        'Marketing materials that validate your startup',
                    ],
                    'conclusion' => 'We create brand systems that eliminate investor skepticism and position your startup as a serious contender worth funding.',
                ],
                [
                    'title' => 'Revenue-Driving Design Strategy',
                    'intro' => 'Capture the 23% revenue increase from consistent branding through:',
                    'points' => [
                        'Customer-converting website and app design',
                        'Marketing campaigns that maximize limited budgets',
                        'Product design that drives user engagement',
                        'Scalable design systems for rapid growth',
                    ],
                    'conclusion' => 'Our strategic approach ensures every design decision drives revenue, customer acquisition, and sustainable growth.',
                ],
            ]),
        ]);
    }
}

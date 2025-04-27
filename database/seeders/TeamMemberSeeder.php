<?php

namespace Database\Seeders;

use App\Models\TeamMember;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class TeamMemberSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        // Create 10 random team members
        TeamMember::factory()->count(10)->create();
        
        // Create a specific team member with real data
        TeamMember::create([
            'name' => 'Abayomi Ogundipe',
            'slug' => 'abayomi-ogundipe',
            'title' => 'Founder, Festa Design Studio',
            'email' => 'abayomi@festa.design',
            'linkedin' => 'https://www.linkedin.com/in/abayomiogundipe',
            'summary' => "International development professional with 15+ years of experience in program design, management, and fundraising. Demonstrated success in leading global teams, securing over $900,000 in funding, and implementing high-impact educational initiatives.\n\nExpertise in developing innovative STEAM (Science, Tech, Engineering, Arts & Maths) programs reaching 3,200+ underserved youth and managing cross-cultural partnerships with UN agencies, OECD donors, private philanthropy and corporate sponsors.",
            'professional_experience' => json_encode([
                [
                    'title' => 'Founder',
                    'company' => 'Festa Design Studio',
                    'period' => '2023 – Present',
                    'description' => 'Leading UX research, design systems, and implementation of accessible web applications for nonprofits and mission-driven startups.',
                    'logo' => '/src/img/fds-logomark.png',
                ],
                [
                    'title' => 'Founder',
                    'company' => 'TEKEDU',
                    'period' => '2013 – 2023',
                    'description' => 'Designed digital experiences and optimized interfaces for multiple nonprofit organizations, boosting user engagement.',
                    'logo' => '/src/img/tekedu.png',
                ]
            ]),
            'volunteer_experience' => json_encode([
                [
                    'title' => 'Founding curator',
                    'company' => 'Global Shapers Chisinau',
                    'period' => '2015 – 2016',
                    'description' => 'Mobilized young leaders to develop and deliver community impact projects under the World Economic Forum\'s Global Shapers initiative.',
                    'logo' => '/src/img/Global_Shapers_Logo.svg',
                ],
                [
                    'title' => 'Ambassador',
                    'company' => 'EU Code Week / EU Robotics Week',
                    'period' => '2014 – 2017',
                    'description' => 'Mobilized young leaders to develop and deliver community impact projects under the World Economic Forum\'s Global Shapers initiative.',
                    'logo' => '/src/img/code-week-logo.png',
                ],
                [
                    'title' => 'Regional Ambassador',
                    'company' => 'Technovation Girls',
                    'period' => '2014 – 2018',
                    'description' => 'Mobilized young leaders to develop and deliver community impact projects under the World Economic Forum\'s Global Shapers initiative.',
                    'logo' => '/src/img/Technovation-Logo_Girls.jpg',
                ],
                [
                    'title' => 'Vice president',
                    'company' => 'AIESEC Moldova and Nigeria',
                    'period' => '2010 – 2013',
                    'description' => 'Led exchange programs, leadership development initiatives, and international partnerships impacting youth across two countries.',
                    'logo' => '/src/img/aiesec.png',
                ]
            ]),
            'education' => json_encode([
                [
                    'degree' => 'Advanced Diploma, International Development',
                    'institution' => 'University of Cambridge, UK',
                ],
                [
                    'degree' => 'B.Sc. in Business Administration',
                    'institution' => 'University of Lagos, Nigeria',
                ]
            ]),
            'certifications' => json_encode([
                [
                    'name' => 'Professional Diploma in UX Design',
                    'institution' => 'UX Design Institute, Ireland',
                    'logo' => '/src/img/ux-design-institute.jpeg',
                ],
                [
                    'name' => 'Professional Diploma in Front-end Web Development',
                    'institution' => 'General Assembly, Washington D.C.',
                    'logo' => '/src/img/general-assembly.png',
                ]
            ]),
            'skills' => json_encode([
                'UX research & design' => ['UX Research', 'Interaction Design', 'Design Systems', 'Figma'],
                'Frontend web development' => ['Tailwind CSS', 'Laravel', 'PHP', 'jQuery', 'HTML5', 'CSS'],
            ]),
            'press' => json_encode([
                [
                    'title' => 'Moldova: Hire Me',
                    'source' => 'The Institute for War & Peace Reporting',
                    'url' => 'https://iwpr.net/impact/moldova-hire-me',
                ],
                [
                    'title' => 'Moldova ramps up IT training for girls',
                    'source' => 'UN Women Europe and Central Asia',
                    'url' => 'https://example.com/article-2',
                ],
                [
                    'title' => 'Speaker at 2016 CYBERSEC',
                    'source' => 'European Cybersecurity Forum',
                    'url' => 'https://2016.cybersecforum.eu/en/speakers/',
                ],
                [
                    'title' => 'Innovative learning tools and ideas to bring down the digital gender gap',
                    'source' => 'European Training Foundation',
                    'url' => 'https://www.etf.europa.eu/en/news-and-events/events/innovative-learning-tools-and-ideas-bring-down-digital-gender-gap',
                ],
                [
                    'title' => 'Meet EU Code Week Ambassador to Moldova',
                    'source' => 'EU Code Week, European Commission',
                    'url' => 'https://codeweek.eu/blog/meet-the-ambassadors-abayomi-ogundipe-moldova/',
                ],
                [
                    'title' => 'GirlsGoIT is leading young women in acquiring IT skills in Moldova',
                    'source' => 'Moldova.org',
                    'url' => 'https://codeweek.eu/blog/meet-the-ambassadors-abayomi-ogundipe-moldova/',
                ],
                [
                    'title' => 'National Coordinators in Europe and beyond',
                    'source' => 'EU Robotics Week',
                    'url' => 'https://codeweek.eu/blog/meet-the-ambassadors-abayomi-ogundipe-moldova/',
                ]
            ]),
        ]);
    }
}

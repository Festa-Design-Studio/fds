<?php

namespace Database\Seeders;

use App\Models\Testimonial;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class TestimonialsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        // Clear existing testimonials
        DB::table('testimonials')->truncate();

        // Add sample testimonials
        $testimonials = [
            [
                'author_name' => 'John Doe',
                'author_title' => 'CEO, Example Nonprofit',
                'quote' => 'Working with Festa Design Studio has been transformative for our organization. Their attention to detail and understanding of our mission helped us communicate our impact more effectively.',
                'published' => true,
                'display_order' => 1,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'author_name' => 'Jane Smith',
                'author_title' => 'Director, Healthcare Initiative',
                'quote' => 'The team at Festa truly understood our vision and turned it into a beautiful, functional design that resonates with our audience. We\'ve seen increased engagement since launching our redesigned platform.',
                'published' => true,
                'display_order' => 2,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'author_name' => 'Michael Johnson',
                'author_title' => 'Founder, Education Startup',
                'quote' => 'Festa\'s design expertise helped us create a brand that stands out in the crowded education space. They took the time to understand our unique approach and translated it into a compelling visual identity.',
                'published' => true,
                'display_order' => 3,
                'created_at' => now(),
                'updated_at' => now(),
            ],
        ];

        // Insert the testimonials
        foreach ($testimonials as $testimonial) {
            Testimonial::create($testimonial);
        }
    }
}

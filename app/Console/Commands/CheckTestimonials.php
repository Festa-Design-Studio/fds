<?php

namespace App\Console\Commands;

use Illuminate\Console\Command;
use App\Models\Testimonial;
use Illuminate\Support\Facades\DB;

class CheckTestimonials extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'check:testimonials';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Check testimonials in the database';

    /**
     * Execute the console command.
     */
    public function handle()
    {
        $this->info('Checking testimonials in the database...');

        // Try direct DB query
        try {
            $count = DB::table('testimonials')->count();
            $this->info("DB Query - Total testimonials: {$count}");
            
            // Show all testimonials
            $testimonials = DB::table('testimonials')->get();
            $this->table(
                ['ID', 'Author', 'Title', 'Published'],
                $testimonials->map(function ($item) {
                    return [
                        'id' => $item->id,
                        'author' => $item->author_name,
                        'title' => $item->author_title,
                        'published' => $item->published ? 'Yes' : 'No'
                    ];
                })
            );
        } catch (\Exception $e) {
            $this->error("DB Query Error: " . $e->getMessage());
        }

        // Try using Eloquent
        try {
            $count = Testimonial::count();
            $this->info("Eloquent - Total testimonials: {$count}");
            
            // Create a test testimonial
            $this->info("Creating a test testimonial...");
            $testimonial = new Testimonial();
            $testimonial->author_name = 'Test Author';
            $testimonial->author_title = 'Test Position';
            $testimonial->quote = 'This is a test testimonial created through the diagnostic command.';
            $testimonial->published = true;
            $testimonial->display_order = 99;
            $testimonial->save();
            
            $this->info("Test testimonial created with ID: {$testimonial->id}");
        } catch (\Exception $e) {
            $this->error("Eloquent Error: " . $e->getMessage());
        }

        return 0;
    }
} 
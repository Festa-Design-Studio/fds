<?php

namespace App\Console\Commands;

use App\Models\Project;
use App\Models\Service;
use App\Models\Article;
use App\Models\ToolkitResource;
use App\Models\Sector;
use App\Models\Industry;
use App\Models\SdgAlignment;
use App\Models\Testimonial;
use App\Models\WorkMetric;
use Illuminate\Console\Command;
use Illuminate\Support\Facades\Cache;

class CacheWarmupCommand extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'cache:warmup';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Warm up application cache with frequently used data';

    /**
     * Execute the console command.
     */
    public function handle()
    {
        $this->info('Starting cache warmup...');

        // Cache projects for work pages
        $this->info('Caching projects...');
        Cache::remember('projects.published', 3600, function () {
            return Project::with(['sector', 'industry', 'sdgAlignment', 'client'])
                ->whereNotNull('published_at')
                ->orderBy('created_at', 'desc')
                ->get();
        });

        // Cache services for service pages
        $this->info('Caching services...');
        Cache::remember('services.all', 3600, function () {
            return Service::with('deliverables')->orderBy('display_order')->get();
        });

        // Cache articles for blog pages
        $this->info('Caching articles...');
        Cache::remember('articles.published', 3600, function () {
            return Article::with('category')
                ->whereNotNull('published_at')
                ->orderBy('published_at', 'desc')
                ->get();
        });

        // Cache toolkit resources
        $this->info('Caching toolkit resources...');
        Cache::remember('toolkit.resources', 3600, function () {
            return ToolkitResource::orderBy('created_at', 'desc')->get();
        });

        // Cache filter options
        $this->info('Caching filter options...');
        Cache::remember('filters.sectors', 3600, function () {
            return Sector::orderBy('name')->get();
        });

        Cache::remember('filters.industries', 3600, function () {
            return Industry::orderBy('name')->get();
        });

        Cache::remember('filters.sdg_alignments', 3600, function () {
            return SdgAlignment::orderBy('name')->get();
        });

        // Cache testimonials
        $this->info('Caching testimonials...');
        Cache::remember('testimonials.all', 3600, function () {
            return Testimonial::orderBy('display_order')->get();
        });

        // Cache work metrics
        $this->info('Caching work metrics...');
        Cache::remember('work.metrics', 3600, function () {
            return WorkMetric::orderBy('display_order')->get();
        });

        $this->info('Cache warmup completed successfully!');

        return Command::SUCCESS;
    }
}

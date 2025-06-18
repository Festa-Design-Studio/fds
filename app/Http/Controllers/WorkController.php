<?php

namespace App\Http\Controllers;

use App\Models\Industry;
use App\Models\Project;
use App\Models\SdgAlignment;
use App\Models\Sector;
use App\Models\Testimonial;
use App\Models\WorkMetric;
use Illuminate\Support\Facades\Log;

class WorkController extends Controller
{
    public function index()
    {
        $projects = Project::whereNotNull('published_at')
            ->orderBy('created_at', 'desc')
            ->paginate(6);

        $metrics = WorkMetric::orderBy('display_order', 'asc')->get();

        // Get all testimonials and explicitly format them for the view
        Log::info('Querying testimonials from database');
        $dbTestimonials = Testimonial::all();
        Log::info('Found '.$dbTestimonials->count().' testimonials in database');

        $testimonials = $dbTestimonials->map(function ($testimonial) {
            $mapped = [
                'quote' => $testimonial->quote,
                'author_name' => $testimonial->author_name,
                'author_title' => $testimonial->author_title,
                'author_avatar' => $testimonial->author_avatar,
                'published' => $testimonial->published,
                'display_order' => $testimonial->display_order,
            ];
            Log::info('Mapped testimonial: '.json_encode($mapped));

            return $mapped;
        })->toArray(); // Convert to array - this is important!

        Log::info('Final testimonials data:', [
            'count' => count($testimonials),
            'testimonials' => $testimonials,
        ]);

        // Debugging: Let's print every single object individually
        $sectors = Sector::orderBy('name')->get();
        Log::info('Total sectors: '.$sectors->count());
        foreach ($sectors as $index => $sector) {
            Log::info("Sector #{$index}", [
                'id' => $sector->id,
                'name' => is_string($sector->name) ? 'VALID STRING: '.$sector->name : 'NOT A STRING: '.gettype($sector->name),
                'slug' => is_string($sector->slug) ? 'VALID STRING: '.$sector->slug : 'NOT A STRING: '.gettype($sector->slug),
                'whole_object' => json_encode($sector),
            ]);
        }

        $industries = Industry::orderBy('name')->get();
        Log::info('Total industries: '.$industries->count());
        foreach ($industries as $index => $industry) {
            Log::info("Industry #{$index}", [
                'id' => $industry->id,
                'name' => is_string($industry->name) ? 'VALID STRING: '.$industry->name : 'NOT A STRING: '.gettype($industry->name),
                'slug' => is_string($industry->slug) ? 'VALID STRING: '.$industry->slug : 'NOT A STRING: '.gettype($industry->slug),
                'whole_object' => json_encode($industry),
            ]);
        }

        $sdgAlignments = SdgAlignment::orderBy('name')->get();
        Log::info('Total SDG alignments: '.$sdgAlignments->count());
        foreach ($sdgAlignments as $index => $sdg) {
            Log::info("SDG #{$index}", [
                'id' => $sdg->id,
                'name' => is_string($sdg->name) ? 'VALID STRING: '.$sdg->name : 'NOT A STRING: '.gettype($sdg->name),
                'code' => is_string($sdg->code) ? 'VALID STRING: '.$sdg->code : 'NOT A STRING: '.gettype($sdg->code),
                'whole_object' => json_encode($sdg),
            ]);
        }

        // Create sector options with defensive coding
        $sectorOptions = [];
        foreach ($sectors as $sector) {
            if (is_object($sector) && isset($sector->slug) && isset($sector->name)) {
                $key = (string) ($sector->slug ?? 'unknown');
                $value = (string) ($sector->name ?? 'Unknown Sector');
                $sectorOptions[$key] = $value;
            } else {
                Log::error('Invalid sector object', ['sector' => $sector]);
            }
        }

        // Create industry options with defensive coding
        $industryOptions = [];
        foreach ($industries as $industry) {
            if (is_object($industry) && isset($industry->slug) && isset($industry->name)) {
                $key = (string) ($industry->slug ?? 'unknown');
                $value = (string) ($industry->name ?? 'Unknown Industry');
                $industryOptions[$key] = $value;
            } else {
                Log::error('Invalid industry object', ['industry' => $industry]);
            }
        }

        // Create SDG alignment options with defensive coding
        $sdgOptions = [];
        foreach ($sdgAlignments as $sdg) {
            if (is_object($sdg) && isset($sdg->code) && isset($sdg->name)) {
                $key = (string) ($sdg->code ?? 'unknown');
                $value = (string) ($sdg->name ?? 'Unknown SDG');
                $sdgOptions[$key] = $value;
            } else {
                Log::error('Invalid SDG object', ['sdg' => $sdg]);
            }
        }

        // If we have no data, provide some default options to prevent errors
        if (empty($sectorOptions)) {
            $sectorOptions = ['nonprofit' => 'Nonprofit', 'startup' => 'Startup'];
            Log::warning('Using fallback sector options');
        }

        if (empty($industryOptions)) {
            $industryOptions = ['tech' => 'Technology', 'healthcare' => 'Healthcare'];
            Log::warning('Using fallback industry options');
        }

        if (empty($sdgOptions)) {
            $sdgOptions = ['sdg1' => 'No Poverty', 'sdg13' => 'Climate Action'];
            Log::warning('Using fallback SDG options');
        }

        Log::info('Final filter options:', [
            'sectors' => $sectorOptions,
            'industries' => $industryOptions,
            'sdgs' => $sdgOptions,
        ]);

        return view('work.index', compact(
            'projects',
            'metrics',
            'testimonials',
            'sectorOptions',
            'industryOptions',
            'sdgOptions'
        ));
    }

    /**
     * Display the specified project/case study.
     *
     * @param  string  $slug
     * @return \Illuminate\Http\Response
     */
    public function show($slug)
    {
        $project = Project::where('slug', $slug)->firstOrFail();

        // Get previous and next projects for navigation (only published projects)
        $previousProject = Project::whereNotNull('published_at')
            ->where('id', '<', $project->id)
            ->orderBy('id', 'desc')
            ->first();

        $nextProject = Project::whereNotNull('published_at')
            ->where('id', '>', $project->id)
            ->orderBy('id', 'asc')
            ->first();

        // Get metrics for the show page
        $metrics = WorkMetric::orderBy('display_order')->get();
        $metrics = $metrics->map(function ($metric) {
            // Convert value to integer, removing any non-numeric characters
            $value = (int) preg_replace('/[^0-9]/', '', $metric->value);

            Log::info("Processing metric for show page {$metric->id}:", [
                'original_value' => $metric->value,
                'processed_value' => $value,
            ]);

            return [
                'id' => $metric->id,
                'value' => $value,
                'title' => $metric->title,
                'description' => $metric->description,
                'colorClass' => $metric->color_class,
            ];
        });

        // Use the case-study-show template as per component showcase
        return view('work.case-study-show', compact('project', 'previousProject', 'nextProject', 'metrics'));
    }

    public function caseStudy()
    {
        return view('work.case-study');
    }
}

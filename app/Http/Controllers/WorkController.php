<?php

namespace App\Http\Controllers;

use App\Models\Industry;
use App\Models\Project;
use App\Models\SdgAlignment;
use App\Models\Sector;
use App\Models\Testimonial;
use App\Models\WorkMetric;
use Illuminate\Support\Facades\Cache;

class WorkController extends Controller
{
    public function index()
    {
        $projects = Project::with(['sector', 'industry', 'sdgAlignment', 'client'])
            ->whereNotNull('published_at')
            ->orderBy('created_at', 'desc')
            ->paginate(6);

        // Cache metrics for 1 hour
        $metrics = Cache::remember('work.metrics', 3600, function () {
            return WorkMetric::orderBy('display_order', 'asc')->get();
        });

        // Cache testimonials for 1 hour
        $testimonials = Cache::remember('work.testimonials', 3600, function () {
            return Testimonial::all()->map(function ($testimonial) {
                return [
                    'quote' => $testimonial->quote,
                    'author_name' => $testimonial->author_name,
                    'author_title' => $testimonial->author_title,
                    'author_avatar' => $testimonial->author_avatar,
                    'published' => $testimonial->published,
                    'display_order' => $testimonial->display_order,
                ];
            })->toArray();
        });

        // Cache filter options for 2 hours
        $sectorOptions = Cache::remember('filters.sectors', 7200, function () {
            $sectors = Sector::orderBy('name')->get();
            return $sectors->pluck('name', 'slug')->toArray() ?: ['nonprofit' => 'Nonprofit', 'startup' => 'Startup'];
        });

        $industryOptions = Cache::remember('filters.industries', 7200, function () {
            $industries = Industry::orderBy('name')->get();
            return $industries->pluck('name', 'slug')->toArray() ?: ['tech' => 'Technology', 'healthcare' => 'Healthcare'];
        });

        $sdgOptions = Cache::remember('filters.sdg_alignments', 7200, function () {
            $sdgAlignments = SdgAlignment::orderBy('name')->get();
            return $sdgAlignments->pluck('name', 'code')->toArray() ?: ['sdg1' => 'No Poverty', 'sdg13' => 'Climate Action'];
        });

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
        $project = Project::with(['sector', 'industry', 'sdgAlignment', 'client'])
            ->where('slug', $slug)
            ->firstOrFail();

        // Get previous and next projects for navigation (only published projects)
        $previousProject = Project::with(['sector', 'industry', 'sdgAlignment', 'client'])
            ->whereNotNull('published_at')
            ->where('id', '<', $project->id)
            ->orderBy('id', 'desc')
            ->first();

        $nextProject = Project::with(['sector', 'industry', 'sdgAlignment', 'client'])
            ->whereNotNull('published_at')
            ->where('id', '>', $project->id)
            ->orderBy('id', 'asc')
            ->first();

        // Get metrics for the show page
        $metrics = WorkMetric::orderBy('display_order')->get();
        $metrics = $metrics->map(function ($metric) {
            // Convert value to integer, removing any non-numeric characters
            $value = (int) preg_replace('/[^0-9]/', '', $metric->value);

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

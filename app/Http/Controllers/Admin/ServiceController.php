<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Service;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Log;

class ServiceController extends Controller
{
    public function index()
    {
        $services = Service::with('deliverables')->orderBy('display_order')->get();

        return view('admin.services.index', compact('services'));
    }

    public function edit($type)
    {
        $service = Service::where('type', $type)->firstOrFail();

        return view('admin.services.edit', compact('service'));
    }

    public function update(Request $request, $type)
    {
        $service = Service::where('type', $type)->firstOrFail();

        $validated = $request->validate([
            'title' => 'required|string|max:255',
            'description' => 'required|string',
            'content' => 'nullable|string',
            'hero_subtitle' => 'nullable|string|max:255',
            'expertise_title' => 'nullable|string|max:255',
            'expertise_description' => 'nullable|string',
            'is_active' => 'nullable|in:0,1',
            'display_order' => 'nullable|integer',
            'deliverables' => 'nullable|array',
            'deliverables.*.title' => 'nullable|string|max:255',
            'deliverables.*.description' => 'nullable|string',
            // SEO fields
            'meta_description' => 'nullable|string|max:500',
            'meta_keywords' => 'nullable|string|max:500',
            'og_title' => 'nullable|string|max:255',
            'og_description' => 'nullable|string|max:500',
            'og_image' => 'nullable|url|max:500',
            'twitter_title' => 'nullable|string|max:255',
            'twitter_description' => 'nullable|string|max:500',
            'twitter_image' => 'nullable|url|max:500',
        ]);

        try {
            DB::beginTransaction();

            // Convert is_active to boolean
            $validated['is_active'] = (bool) $request->input('is_active', false);

            // Remove deliverables from validated data as it's handled separately
            $serviceData = collect($validated)->except('deliverables')->toArray();

            // Update service
            $service->update($serviceData);

            // Handle deliverables
            if ($request->has('deliverables') && is_array($request->deliverables)) {
                // Delete existing deliverables
                $service->deliverables()->delete();

                // Create new deliverables
                foreach ($request->deliverables as $index => $deliverable) {
                    // Only create deliverable if both title and description are provided
                    if (! empty($deliverable['title']) && ! empty($deliverable['description'])) {
                        $service->deliverables()->create([
                            'title' => $deliverable['title'],
                            'description' => $deliverable['description'],
                            'display_order' => $index,
                        ]);
                    }
                }
            }

            DB::commit();

            return redirect()->route('admin.services')
                ->with('success', 'Service updated successfully');

        } catch (\Exception $e) {
            DB::rollBack();

            Log::error('Error updating service: '.$e->getMessage());

            return back()
                ->withInput()
                ->withErrors(['error' => 'Failed to update service. Please try again.']);
        }
    }
}

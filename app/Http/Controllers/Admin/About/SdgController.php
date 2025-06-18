<?php

namespace App\Http\Controllers\Admin\About;

use App\Http\Controllers\Controller;
use App\Models\AboutSdg;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class SdgController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $sdgs = AboutSdg::orderBy('display_order')->orderBy('number')->get();

        return view('admin.about.sdg.index', compact('sdgs'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('admin.about.sdg.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $validated = $request->validate([
            'number' => 'required|integer|min:1|max:17|unique:about_sdgs,number',
            'title' => 'required|string|max:255',
            'description' => 'nullable|string',
            'svg_file' => 'required|file|mimes:svg|max:2048',
            'is_active' => 'boolean',
            'display_order' => 'nullable|integer',
        ]);

        // Handle SVG file upload
        if ($request->hasFile('svg_file')) {
            $validated['svg_path'] = $request->file('svg_file')->store('sdg-icons', 'public');
        }

        // Remove svg_file from validated data as it's not a database field
        unset($validated['svg_file']);

        // Set default values
        $validated['is_active'] = $request->has('is_active');
        $validated['display_order'] = $validated['display_order'] ?? 0;

        AboutSdg::create($validated);

        return redirect()->route('admin.about.sdg.index')
            ->with('success', 'SDG goal created successfully.');
    }

    /**
     * Display the specified resource.
     */
    public function show(AboutSdg $aboutSdg)
    {
        return view('admin.about.sdg.show', compact('aboutSdg'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(AboutSdg $aboutSdg)
    {
        return view('admin.about.sdg.edit', compact('aboutSdg'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, AboutSdg $aboutSdg)
    {
        $validated = $request->validate([
            'number' => 'required|integer|min:1|max:17|unique:about_sdgs,number,'.$aboutSdg->id,
            'title' => 'required|string|max:255',
            'description' => 'nullable|string',
            'svg_file' => 'nullable|file|mimes:svg|max:2048',
            'is_active' => 'boolean',
            'display_order' => 'nullable|integer',
        ]);

        // Handle SVG file upload
        if ($request->hasFile('svg_file')) {
            // Delete old SVG file if exists
            if ($aboutSdg->svg_path && Storage::disk('public')->exists($aboutSdg->svg_path)) {
                Storage::disk('public')->delete($aboutSdg->svg_path);
            }

            $validated['svg_path'] = $request->file('svg_file')->store('sdg-icons', 'public');
        }

        // Remove svg_file from validated data as it's not a database field
        unset($validated['svg_file']);

        // Set default values
        $validated['is_active'] = $request->has('is_active');
        $validated['display_order'] = $validated['display_order'] ?? 0;

        $aboutSdg->update($validated);

        return redirect()->route('admin.about.sdg.index')
            ->with('success', 'SDG goal updated successfully.');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(AboutSdg $aboutSdg)
    {
        // Delete SVG file if exists
        if ($aboutSdg->svg_path && Storage::disk('public')->exists($aboutSdg->svg_path)) {
            Storage::disk('public')->delete($aboutSdg->svg_path);
        }

        $aboutSdg->delete();

        return redirect()->route('admin.about.sdg.index')
            ->with('success', 'SDG goal deleted successfully.');
    }
}

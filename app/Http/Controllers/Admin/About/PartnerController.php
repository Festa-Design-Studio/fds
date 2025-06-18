<?php

namespace App\Http\Controllers\Admin\About;

use App\Http\Controllers\Controller;
use App\Models\AboutPartner;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class PartnerController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $partners = AboutPartner::orderBy('display_order')->orderBy('name')->get();

        return view('admin.about.partners.index', compact('partners'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('admin.about.partners.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $validated = $request->validate([
            'name' => 'required|string|max:255',
            'description' => 'nullable|string',
            'logo_file' => 'required|file|mimes:svg,png,jpg,jpeg|max:2048',
            'website_url' => 'nullable|url|max:255',
            'is_active' => 'boolean',
            'display_order' => 'nullable|integer',
        ]);

        // Handle logo file upload
        if ($request->hasFile('logo_file')) {
            $validated['logo_path'] = $request->file('logo_file')->store('partner-logos', 'public');
        }

        // Remove logo_file from validated data as it's not a database field
        unset($validated['logo_file']);

        // Set default values
        $validated['is_active'] = $request->has('is_active');
        $validated['display_order'] = $validated['display_order'] ?? 0;

        AboutPartner::create($validated);

        return redirect()->route('admin.about.partners.index')
            ->with('success', 'Partner organization created successfully.');
    }

    /**
     * Display the specified resource.
     */
    public function show(AboutPartner $aboutPartner)
    {
        return view('admin.about.partners.show', compact('aboutPartner'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(AboutPartner $aboutPartner)
    {
        return view('admin.about.partners.edit', compact('aboutPartner'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, AboutPartner $aboutPartner)
    {
        $validated = $request->validate([
            'name' => 'required|string|max:255',
            'description' => 'nullable|string',
            'logo_file' => 'nullable|file|mimes:svg,png,jpg,jpeg|max:2048',
            'website_url' => 'nullable|url|max:255',
            'is_active' => 'boolean',
            'display_order' => 'nullable|integer',
        ]);

        // Handle logo file upload
        if ($request->hasFile('logo_file')) {
            // Delete old logo file if exists
            if ($aboutPartner->logo_path && Storage::disk('public')->exists($aboutPartner->logo_path)) {
                Storage::disk('public')->delete($aboutPartner->logo_path);
            }

            $validated['logo_path'] = $request->file('logo_file')->store('partner-logos', 'public');
        }

        // Remove logo_file from validated data as it's not a database field
        unset($validated['logo_file']);

        // Set default values
        $validated['is_active'] = $request->has('is_active');
        $validated['display_order'] = $validated['display_order'] ?? 0;

        $aboutPartner->update($validated);

        return redirect()->route('admin.about.partners.index')
            ->with('success', 'Partner organization updated successfully.');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(AboutPartner $aboutPartner)
    {
        // Delete logo file if exists
        if ($aboutPartner->logo_path && Storage::disk('public')->exists($aboutPartner->logo_path)) {
            Storage::disk('public')->delete($aboutPartner->logo_path);
        }

        $aboutPartner->delete();

        return redirect()->route('admin.about.partners.index')
            ->with('success', 'Partner organization deleted successfully.');
    }
}

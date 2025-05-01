<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Sector;
use Illuminate\Http\Request;
use Illuminate\Support\Str;

class SectorController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $sectors = Sector::withCount('projects')->paginate(10);
        return view('admin.sectors.index', compact('sectors'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('admin.sectors.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $validated = $request->validate([
            'name' => 'required|string|max:255|unique:sectors,name',
        ]);
        
        $validated['slug'] = Str::slug($validated['name']);
        
        Sector::create($validated);
        
        return redirect()->route('admin.sectors.index')
            ->with('success', 'Sector created successfully.');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Sector $sector)
    {
        return view('admin.sectors.edit', compact('sector'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Sector $sector)
    {
        $validated = $request->validate([
            'name' => 'required|string|max:255|unique:sectors,name,' . $sector->id,
        ]);
        
        $validated['slug'] = Str::slug($validated['name']);
        
        $sector->update($validated);
        
        return redirect()->route('admin.sectors.index')
            ->with('success', 'Sector updated successfully.');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Sector $sector)
    {
        // Check if any projects are using this sector
        if ($sector->projects()->count() > 0) {
            return redirect()->route('admin.sectors.index')
                ->with('error', 'Cannot delete sector because it is being used by one or more projects.');
        }
        
        $sector->delete();
        
        return redirect()->route('admin.sectors.index')
            ->with('success', 'Sector deleted successfully.');
    }
}

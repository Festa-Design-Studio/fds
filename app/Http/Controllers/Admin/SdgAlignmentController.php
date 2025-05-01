<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\SdgAlignment;
use Illuminate\Http\Request;
use Illuminate\Support\Str;

class SdgAlignmentController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $sdgAlignments = SdgAlignment::withCount('projects')->paginate(10);
        return view('admin.sdg-alignments.index', compact('sdgAlignments'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('admin.sdg-alignments.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $validated = $request->validate([
            'name' => 'required|string|max:255|unique:sdg_alignments,name',
            'code' => 'nullable|string|max:10|unique:sdg_alignments,code',
        ]);
        
        $validated['slug'] = Str::slug($validated['name']);
        
        SdgAlignment::create($validated);
        
        return redirect()->route('admin.sdg-alignments.index')
            ->with('success', 'SDG Alignment created successfully.');
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
    public function edit(SdgAlignment $sdgAlignment)
    {
        return view('admin.sdg-alignments.edit', compact('sdgAlignment'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, SdgAlignment $sdgAlignment)
    {
        $validated = $request->validate([
            'name' => 'required|string|max:255|unique:sdg_alignments,name,' . $sdgAlignment->id,
            'code' => 'nullable|string|max:10|unique:sdg_alignments,code,' . $sdgAlignment->id,
        ]);
        
        $validated['slug'] = Str::slug($validated['name']);
        
        $sdgAlignment->update($validated);
        
        return redirect()->route('admin.sdg-alignments.index')
            ->with('success', 'SDG Alignment updated successfully.');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(SdgAlignment $sdgAlignment)
    {
        // Check if any projects are using this SDG Alignment
        if ($sdgAlignment->projects()->count() > 0) {
            return redirect()->route('admin.sdg-alignments.index')
                ->with('error', 'Cannot delete SDG Alignment because it is being used by one or more projects.');
        }
        
        $sdgAlignment->delete();
        
        return redirect()->route('admin.sdg-alignments.index')
            ->with('success', 'SDG Alignment deleted successfully.');
    }
}

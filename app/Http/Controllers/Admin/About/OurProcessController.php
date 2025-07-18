<?php

namespace App\Http\Controllers\Admin\About;

use App\Http\Controllers\Controller;
use App\Models\OurProcess;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Redirect;

class OurProcessController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $processes = OurProcess::orderBy('type')->orderBy('order_index')->get();
        
        $groupedProcesses = $processes->groupBy('type');
        
        return view('admin.about.our-process.index', compact('groupedProcesses'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $types = OurProcess::getTypes();
        return view('admin.about.our-process.create', compact('types'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $validated = $request->validate([
            'type' => 'required|in:philosophy,methodology,impact',
            'title' => 'required|string|max:255',
            'description' => 'required|string',
            'icon' => 'nullable|string',
            'order_index' => 'required|integer|min:0',
            'is_active' => 'boolean',
            'step_number' => 'nullable|integer|min:1',
            'detailed_content' => 'nullable|string',
            'metric_type' => 'nullable|string',
            'metric_value' => 'nullable|string|max:50',
            'metric_label' => 'nullable|string|max:100',
            'show_metric' => 'boolean',
        ]);

        $validated['is_active'] = $request->has('is_active');
        $validated['show_metric'] = $request->has('show_metric');

        OurProcess::create($validated);

        return redirect()->route('admin.about.our-process.index')
            ->with('success', 'Process item created successfully.');
    }

    /**
     * Display the specified resource.
     */
    public function show(OurProcess $ourProcess)
    {
        return view('admin.about.our-process.show', compact('ourProcess'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(OurProcess $ourProcess)
    {
        $types = OurProcess::getTypes();
        return view('admin.about.our-process.edit', compact('ourProcess', 'types'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, OurProcess $ourProcess)
    {
        $validated = $request->validate([
            'type' => 'required|in:philosophy,methodology,impact',
            'title' => 'required|string|max:255',
            'description' => 'required|string',
            'icon' => 'nullable|string',
            'order_index' => 'required|integer|min:0',
            'is_active' => 'boolean',
            'step_number' => 'nullable|integer|min:1',
            'detailed_content' => 'nullable|string',
            'metric_type' => 'nullable|string',
            'metric_value' => 'nullable|string|max:50',
            'metric_label' => 'nullable|string|max:100',
            'show_metric' => 'boolean',
        ]);

        $validated['is_active'] = $request->has('is_active');
        $validated['show_metric'] = $request->has('show_metric');

        $ourProcess->update($validated);

        return redirect()->route('admin.about.our-process.index')
            ->with('success', 'Process item updated successfully.');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(OurProcess $ourProcess)
    {
        $ourProcess->delete();

        return redirect()->route('admin.about.our-process.index')
            ->with('success', 'Process item deleted successfully.');
    }
}

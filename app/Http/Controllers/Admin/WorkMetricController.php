<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\WorkMetric;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Log;

class WorkMetricController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $metrics = WorkMetric::orderBy('display_order')->get();
        return view('admin.work.metrics.index', compact('metrics'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('admin.work.metrics.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $validated = $request->validate([
            'value' => 'required|string|max:255',
            'title' => 'required|string|max:255',
            'description' => 'required|string',
            'color_class' => 'required|string|max:255',
            'display_order' => 'nullable|integer'
        ]);

        WorkMetric::create($validated);

        return redirect()->route('admin.work.metrics.index')
            ->with('success', 'Metric created successfully.');
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
    public function edit(WorkMetric $metric)
    {
        Log::info('Editing metric', ['metric_id' => $metric->id, 'metric' => $metric->toArray()]);
        return view('admin.work.metrics.edit', compact('metric'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, WorkMetric $metric)
    {
        Log::info('Updating metric', [
            'metric_id' => $metric->id, 
            'request_data' => $request->all()
        ]);
        
        $validated = $request->validate([
            'value' => 'required|string|max:255',
            'title' => 'required|string|max:255',
            'description' => 'required|string',
            'color_class' => 'required|string|max:255',
            'display_order' => 'nullable|integer'
        ]);

        $result = $metric->update($validated);
        
        Log::info('Metric update result', [
            'metric_id' => $metric->id, 
            'success' => $result,
            'updated_metric' => $metric->fresh()->toArray()
        ]);

        return redirect()->route('admin.work.metrics.index')
            ->with('success', 'Metric updated successfully.');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(WorkMetric $metric)
    {
        $metric->delete();

        return redirect()->route('admin.work.metrics.index')
            ->with('success', 'Metric deleted successfully.');
    }
}

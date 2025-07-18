<?php

namespace App\Http\Controllers\Admin\About;

use App\Http\Controllers\Controller;
use App\Models\DesignForGoodContent;
use Illuminate\Http\Request;

class DesignForGoodContentController extends Controller
{
    public function index()
    {
        $contents = DesignForGoodContent::orderBy('display_order')->get();
        $availableSections = DesignForGoodContent::getAvailableSections();

        return view('admin.about.design-for-good.index', compact('contents', 'availableSections'));
    }

    public function create()
    {
        $availableSections = DesignForGoodContent::getAvailableSections();
        $usedSections = DesignForGoodContent::pluck('section_key')->toArray();
        $availableSections = array_diff_key($availableSections, array_flip($usedSections));

        return view('admin.about.design-for-good.create', compact('availableSections'));
    }

    public function store(Request $request)
    {
        $request->validate([
            'section_key' => 'required|string|unique:design_for_good_contents,section_key',
            'title' => 'required|string|max:255',
            'subtitle' => 'nullable|string',
            'description' => 'nullable|string',
            'content_data' => 'nullable|array',
            'display_order' => 'required|integer|min:0',
            'is_active' => 'boolean',
        ]);

        DesignForGoodContent::create($request->all());

        return redirect()->route('admin.about.design-for-good.index')
                        ->with('success', 'Content section created successfully.');
    }

    public function edit(DesignForGoodContent $designForGoodContent)
    {
        $availableSections = DesignForGoodContent::getAvailableSections();
        
        return view('admin.about.design-for-good.edit', compact('designForGoodContent', 'availableSections'));
    }

    public function update(Request $request, DesignForGoodContent $designForGoodContent)
    {
        $request->validate([
            'section_key' => 'required|string|unique:design_for_good_contents,section_key,' . $designForGoodContent->id,
            'title' => 'required|string|max:255',
            'subtitle' => 'nullable|string',
            'description' => 'nullable|string',
            'content_data' => 'nullable|array',
            'display_order' => 'required|integer|min:0',
            'is_active' => 'boolean',
        ]);

        $designForGoodContent->update($request->all());

        return redirect()->route('admin.about.design-for-good.index')
                        ->with('success', 'Content section updated successfully.');
    }

    public function destroy(DesignForGoodContent $designForGoodContent)
    {
        $designForGoodContent->delete();

        return redirect()->route('admin.about.design-for-good.index')
                        ->with('success', 'Content section deleted successfully.');
    }
}
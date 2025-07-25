<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\PageSeo;
use Illuminate\Http\Request;

class PageSeoController extends Controller
{
    public function index()
    {
        $availablePages = PageSeo::getAvailablePages();
        $pageSeosCollection = PageSeo::all()->keyBy('page_identifier');
        
        // Create array with all pages and their SEO status
        $pageSeos = [];
        foreach ($availablePages as $identifier => $title) {
            $pageSeos[] = [
                'identifier' => $identifier,
                'title' => $title,
                'seo' => $pageSeosCollection->get($identifier),
                'has_seo' => $pageSeosCollection->has($identifier)
            ];
        }

        return view('admin.page-seo.index', compact('pageSeos'));
    }

    public function edit($pageIdentifier)
    {
        $availablePages = PageSeo::getAvailablePages();
        
        if (!array_key_exists($pageIdentifier, $availablePages)) {
            abort(404, 'Page not found');
        }

        $pageSeo = PageSeo::getOrCreateForPage($pageIdentifier, $availablePages[$pageIdentifier]);

        return view('admin.page-seo.edit', compact('pageSeo'));
    }

    public function update(Request $request, $pageIdentifier)
    {
        $availablePages = PageSeo::getAvailablePages();
        
        if (!array_key_exists($pageIdentifier, $availablePages)) {
            abort(404, 'Page not found');
        }

        $validated = $request->validate([
            'page_title' => 'nullable|string|max:255',
            // SEO fields
            'meta_description' => 'nullable|string|max:500',
            'meta_keywords' => 'nullable|string|max:500',
            'og_title' => 'nullable|string|max:255',
            'og_description' => 'nullable|string|max:500',
            'og_image' => 'nullable|url|max:500',
            'twitter_title' => 'nullable|string|max:255',
            'twitter_description' => 'nullable|string|max:500',
            'twitter_image' => 'nullable|url|max:500',
            // Content fields for specific pages
            'hero_title' => 'nullable|string|max:255',
            'hero_subtitle' => 'nullable|string|max:255',
            'hero_description' => 'nullable|string|max:1000',
        ]);

        $pageSeo = PageSeo::getOrCreateForPage($pageIdentifier, $availablePages[$pageIdentifier]);
        
        // Handle content separately
        $contentFields = ['hero_title', 'hero_subtitle', 'hero_description'];
        $content = [];
        foreach ($contentFields as $field) {
            if (isset($validated[$field])) {
                $content[$field] = $validated[$field];
                unset($validated[$field]);
            }
        }
        
        // Update content if any content fields are provided
        if (!empty($content)) {
            $existingContent = $pageSeo->content ?? [];
            $validated['content'] = array_merge($existingContent, $content);
        }

        $pageSeo->update($validated);

        return redirect()->route('admin.page-seo.index')
            ->with('success', 'Page content and SEO updated successfully.');
    }
}
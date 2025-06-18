<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Testimonial;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Log;
use Illuminate\Support\Facades\Storage;

class TestimonialController extends Controller
{
    public function index()
    {
        $testimonials = Testimonial::orderBy('display_order', 'asc')->paginate(10);

        return view('admin.work.testimonial.index', compact('testimonials'));
    }

    public function create()
    {
        return view('admin.work.testimonial.create');
    }

    public function store(Request $request)
    {
        Log::info('Testimonial store method called', [
            'has_file' => $request->hasFile('author_avatar'),
            'all_inputs' => $request->all(),
        ]);

        $validated = $request->validate([
            'author_name' => 'required|string|max:255',
            'author_title' => 'required|string|max:255',
            'quote' => 'required|string',
            'author_avatar' => 'nullable|image|mimes:jpeg,png,jpg,gif|max:2048',
            'published' => 'boolean',
            'display_order' => 'integer',
        ]);

        if ($request->hasFile('author_avatar')) {
            try {
                $file = $request->file('author_avatar');
                Log::info('Processing uploaded file', [
                    'original_name' => $file->getClientOriginalName(),
                    'mime_type' => $file->getMimeType(),
                    'size' => $file->getSize(),
                ]);

                $path = $file->store('testimonials', 'public');
                Log::info('File stored successfully', ['path' => $path]);

                $validated['author_avatar'] = $path;
            } catch (\Exception $e) {
                Log::error('Error storing file', [
                    'message' => $e->getMessage(),
                    'trace' => $e->getTraceAsString(),
                ]);

                return back()->withInput()->withErrors(['author_avatar' => 'Error uploading image: '.$e->getMessage()]);
            }
        }

        $testimonial = Testimonial::create($validated);
        Log::info('Testimonial created successfully', ['id' => $testimonial->id]);

        return redirect()->route('admin.work.testimonials.index')
            ->with('success', 'Testimonial created successfully.');
    }

    public function edit(Testimonial $testimonial)
    {
        return view('admin.work.testimonial.edit', compact('testimonial'));
    }

    public function update(Request $request, Testimonial $testimonial)
    {
        Log::info('Testimonial update method called', [
            'id' => $testimonial->id,
            'has_file' => $request->hasFile('author_avatar'),
            'all_inputs' => $request->all(),
        ]);

        $validated = $request->validate([
            'author_name' => 'required|string|max:255',
            'author_title' => 'required|string|max:255',
            'quote' => 'required|string',
            'author_avatar' => 'nullable|image|mimes:jpeg,png,jpg,gif|max:2048',
            'published' => 'boolean',
            'display_order' => 'integer',
        ]);

        if ($request->hasFile('author_avatar')) {
            try {
                // Delete old avatar if exists
                if ($testimonial->author_avatar && Storage::disk('public')->exists($testimonial->author_avatar)) {
                    Storage::disk('public')->delete($testimonial->author_avatar);
                    Log::info('Deleted old avatar', ['path' => $testimonial->author_avatar]);
                }

                $file = $request->file('author_avatar');
                Log::info('Processing uploaded file for update', [
                    'original_name' => $file->getClientOriginalName(),
                    'mime_type' => $file->getMimeType(),
                    'size' => $file->getSize(),
                ]);

                $path = $file->store('testimonials', 'public');
                Log::info('File stored successfully for update', ['path' => $path]);

                $validated['author_avatar'] = $path;
            } catch (\Exception $e) {
                Log::error('Error storing file during update', [
                    'message' => $e->getMessage(),
                    'trace' => $e->getTraceAsString(),
                ]);

                return back()->withInput()->withErrors(['author_avatar' => 'Error uploading image: '.$e->getMessage()]);
            }
        }

        $testimonial->update($validated);
        Log::info('Testimonial updated successfully', ['id' => $testimonial->id]);

        return redirect()->route('admin.work.testimonials.index')
            ->with('success', 'Testimonial updated successfully.');
    }

    public function destroy(Testimonial $testimonial)
    {
        // Delete avatar if exists
        if ($testimonial->author_avatar && Storage::disk('public')->exists($testimonial->author_avatar)) {
            Storage::disk('public')->delete($testimonial->author_avatar);
            Log::info('Deleted avatar during testimonial deletion', ['path' => $testimonial->author_avatar]);
        }

        $testimonial->delete();
        Log::info('Testimonial deleted successfully', ['id' => $testimonial->id]);

        return redirect()->route('admin.work.testimonials.index')
            ->with('success', 'Testimonial deleted successfully.');
    }
}

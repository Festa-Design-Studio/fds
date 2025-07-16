<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Client;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Cache;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Str;

class ClientController extends Controller
{
    /**
     * Display a listing of the clients.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $clients = Client::withCount('projects')->paginate(10);

        return view('admin.clients.index', compact('clients'));
    }

    /**
     * Show the form for creating a new client.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.clients.create');
    }

    /**
     * Store a newly created client in storage.
     *
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $validated = $request->validate([
            'name' => 'required|max:255',
            'website_url' => 'nullable|url|max:255',
            'description' => 'nullable',
            'logo' => 'nullable|image|max:2048|mimes:jpeg,png,jpg,gif,svg',
        ]);

        // Generate slug from name
        $validated['slug'] = Str::slug($validated['name']);

        // Handle logo upload
        if ($request->hasFile('logo')) {
            $validated['logo'] = $request->file('logo')->store('clients', 'public');
        }

        Client::create($validated);

        // Clear sitemap cache when client content changes
        $this->clearSitemapCache();

        return redirect()->route('admin.clients.index')
            ->with('success', 'Client created successfully.');
    }

    /**
     * Display the specified client.
     *
     * @return \Illuminate\Http\Response
     */
    public function show(Client $client)
    {
        $client->load('projects');

        return view('admin.clients.show', compact('client'));
    }

    /**
     * Show the form for editing the specified client.
     *
     * @return \Illuminate\Http\Response
     */
    public function edit(Client $client)
    {
        return view('admin.clients.edit', compact('client'));
    }

    /**
     * Update the specified client in storage.
     *
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Client $client)
    {
        $validated = $request->validate([
            'name' => 'required|max:255',
            'website_url' => 'nullable|url|max:255',
            'description' => 'nullable',
            'logo' => 'nullable|image|max:2048|mimes:jpeg,png,jpg,gif,svg',
        ]);

        // Handle logo upload
        if ($request->hasFile('logo')) {
            // Delete old logo if exists
            if ($client->logo) {
                Storage::disk('public')->delete($client->logo);
            }
            $validated['logo'] = $request->file('logo')->store('clients', 'public');
        }

        $client->update($validated);

        // Clear sitemap cache when client content changes
        $this->clearSitemapCache();

        return redirect()->route('admin.clients.index')
            ->with('success', 'Client updated successfully.');
    }

    /**
     * Remove the specified client from storage.
     *
     * @return \Illuminate\Http\Response
     */
    public function destroy(Client $client)
    {
        // Delete logo if exists
        if ($client->logo) {
            Storage::disk('public')->delete($client->logo);
        }

        $client->delete();

        // Clear sitemap cache when client content changes
        $this->clearSitemapCache();

        return redirect()->route('admin.clients.index')
            ->with('success', 'Client deleted successfully.');
    }

    /**
     * Clear sitemap cache when client content changes
     */
    private function clearSitemapCache()
    {
        Cache::forget('sitemap_work');
        Cache::forget('sitemap_static');
    }
}

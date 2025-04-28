<?php

namespace App\Http\Controllers\About\Team;

use App\Http\Controllers\Controller;
use App\Models\TeamMember;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Log;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Str;

class TeamMemberController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $teamMembers = TeamMember::orderBy('name')->get();
        return view('admin.about.team.index', compact('teamMembers'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('admin.about.team.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $validated = $request->validate([
            'name' => 'required|string|max:255',
            'title' => 'required|string|max:255',
            'email' => 'nullable|email|max:255',
            'linkedin' => 'nullable|url|max:255',
            'summary' => 'required|string',
            'avatar' => 'nullable|image|max:2048',
            'professional_experience' => 'nullable|array',
            'volunteer_experience' => 'nullable|array',
            'education' => 'nullable|array',
            'certifications' => 'nullable|array',
            'skills' => 'nullable|array',
            'press' => 'nullable|array',
        ]);
        
        // Generate slug from name
        $validated['slug'] = Str::slug($validated['name']);
        
        // Handle avatar upload
        if ($request->hasFile('avatar')) {
            $validated['avatar'] = $request->file('avatar')->store('team-members', 'public');
        }
        
        // Create the team member record
        TeamMember::create($validated);
        
        return redirect()->route('admin.about.team.index')
            ->with('success', 'Team member created successfully.');
    }

    /**
     * Display the specified resource.
     */
    public function show(TeamMember $team_member)
    {
        return view('about.team.show', compact('team_member'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(TeamMember $team_member)
    {
        return view('admin.about.team.edit', compact('team_member'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, TeamMember $team_member)
    {
        $validated = $request->validate([
            'name' => 'required|string|max:255',
            'title' => 'required|string|max:255',
            'email' => 'nullable|email|max:255',
            'linkedin' => 'nullable|url|max:255',
            'summary' => 'required|string',
            'avatar' => 'nullable|image|max:2048',
            'professional_experience' => 'nullable|array',
            'volunteer_experience' => 'nullable|array',
            'education' => 'nullable|array',
            'certifications' => 'nullable|array',
            'skills' => 'nullable|array',
            'press' => 'nullable|array',
        ]);
        
        // Update slug only if name changes
        if ($team_member->name !== $validated['name']) {
            $validated['slug'] = Str::slug($validated['name']);
        }
        
        // Handle avatar upload
        if ($request->hasFile('avatar')) {
            // Delete old avatar if exists
            if ($team_member->avatar && Storage::disk('public')->exists($team_member->avatar)) {
                Storage::disk('public')->delete($team_member->avatar);
            }
            
            $validated['avatar'] = $request->file('avatar')->store('team-members', 'public');
        }
        
        // Update the team member record
        $team_member->update($validated);
        
        return redirect()->route('admin.about.team.index')
            ->with('success', 'Team member updated successfully.');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(TeamMember $team_member)
    {
        // Delete avatar file if exists
        if ($team_member->avatar && Storage::disk('public')->exists($team_member->avatar)) {
            Storage::disk('public')->delete($team_member->avatar);
        }
        
        $team_member->delete();
        
        return redirect()->route('admin.about.team.index')
            ->with('success', 'Team member deleted successfully.');
    }

    /**
     * Upload a logo image for company experiences, volunteer organizations, certifications, etc.
     * 
     * @param Request $request
     * @return \Illuminate\Http\JsonResponse
     */
    public function uploadLogo(Request $request)
    {
        try {
            Log::info('Logo upload request received', [
                'section' => $request->input('section'),
                'has_file' => $request->hasFile('logo'),
                'file_name' => $request->hasFile('logo') ? $request->file('logo')->getClientOriginalName() : null,
                'file_size' => $request->hasFile('logo') ? $request->file('logo')->getSize() : null,
            ]);
            
            $request->validate([
                'logo' => 'required|image|max:2048',
                'section' => 'required|string|in:professional_experience,volunteer_experience,education,certifications',
            ]);
            
            if ($request->hasFile('logo')) {
                // Store the logo in the appropriate directory based on section
                $section = $request->input('section');
                $file = $request->file('logo');
                
                // Create directory if it doesn't exist
                $directory = "team-members/{$section}-logos";
                if (!Storage::disk('public')->exists($directory)) {
                    Storage::disk('public')->makeDirectory($directory);
                }
                
                try {
                    $path = $file->store($directory, 'public');
                    
                    // Return the path for use in the form
                    return response()->json([
                        'success' => true,
                        'path' => $path,
                        'url' => asset('storage/' . $path),
                        'message' => 'Logo uploaded successfully.',
                    ]);
                } catch (\Exception $e) {
                    Log::error('Error storing file: ' . $e->getMessage(), [
                        'exception' => get_class($e),
                        'file' => $e->getFile(),
                        'line' => $e->getLine(),
                    ]);
                    
                    return response()->json([
                        'success' => false,
                        'message' => 'Error storing file: ' . $e->getMessage(),
                    ], 500);
                }
            }
            
            return response()->json([
                'success' => false,
                'message' => 'No logo file provided.',
            ], 400);
        } catch (\Exception $e) {
            // Log the error
            Log::error('Logo upload error: ' . $e->getMessage(), [
                'exception' => get_class($e),
                'file' => $e->getFile(),
                'line' => $e->getLine(),
                'trace' => $e->getTraceAsString(),
            ]);
            
            return response()->json([
                'success' => false,
                'message' => 'Error uploading logo: ' . $e->getMessage(),
            ], 500);
        }
    }
}

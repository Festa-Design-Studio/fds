<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\ServiceSector;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Log;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Validator;
use Illuminate\Validation\ValidationException;

class ServiceSectorController extends Controller
{
    public function index()
    {
        $sectors = ServiceSector::orderBy('display_order')->get();
        return view('admin.services.sectors.index', compact('sectors'));
    }

    public function edit($type)
    {
        $sector = ServiceSector::where('type', $type)->firstOrFail();
        return view('admin.services.sectors.edit', compact('sector'));
    }

    public function update(Request $request, $type)
    {
        // Debug: Log raw request data
        Log::info('Raw request data:', [
            'all_data' => $request->all(),
            'expertise_items_raw' => $request->expertise_items,
            'method' => $request->method(),
            'headers' => $request->headers->all()
        ]);

        try {
            DB::beginTransaction();

            // Convert expertise_items from JSON string to array if needed
            $data = $request->all();
            
            // Handle the _method field for PUT requests
            if (isset($data['_method'])) {
                unset($data['_method']);
            }
            
            // Handle expertise_items
            if (isset($data['expertise_items'])) {
                if (is_string($data['expertise_items'])) {
                    $expertiseItems = json_decode($data['expertise_items'], true);
                    
                    // Debug: Log decoded expertise items
                    Log::info('Decoded expertise items:', [
                        'expertise_items' => $expertiseItems
                    ]);
                    
                    if (json_last_error() !== JSON_ERROR_NONE) {
                        Log::error('JSON decode error:', ['error' => json_last_error_msg()]);
                        throw ValidationException::withMessages([
                            'expertise_items' => ['Invalid expertise items data: ' . json_last_error_msg()]
                        ]);
                    }
                    
                    $data['expertise_items'] = $expertiseItems;
                } elseif (!is_array($data['expertise_items'])) {
                    throw ValidationException::withMessages([
                        'expertise_items' => ['Expertise items must be an array or valid JSON string']
                    ]);
                }
            }

            // Handle challenge_items
            if (isset($data['challenge_items'])) {
                if (is_string($data['challenge_items'])) {
                    $challengeItems = json_decode($data['challenge_items'], true);
                    
                    // Debug: Log decoded challenge items
                    Log::info('Decoded challenge items:', [
                        'challenge_items' => $challengeItems
                    ]);
                    
                    if (json_last_error() !== JSON_ERROR_NONE) {
                        Log::error('JSON decode error:', ['error' => json_last_error_msg()]);
                        throw ValidationException::withMessages([
                            'challenge_items' => ['Invalid challenge items data: ' . json_last_error_msg()]
                        ]);
                    }
                    
                    $data['challenge_items'] = $challengeItems;
                } elseif (!is_array($data['challenge_items'])) {
                    throw ValidationException::withMessages([
                        'challenge_items' => ['Challenge items must be an array or valid JSON string']
                    ]);
                }
            }

            // Additional validation for expertise items structure
            if (isset($data['expertise_items']) && is_array($data['expertise_items'])) {
                foreach ($data['expertise_items'] as $index => $item) {
                    if (!isset($item['title']) || !isset($item['intro']) || !isset($item['points']) || !isset($item['conclusion'])) {
                        throw ValidationException::withMessages([
                            'expertise_items' => ["Item {$index} is missing required fields (title, intro, points, conclusion)"]
                        ]);
                    }

                    if (!is_array($item['points'])) {
                        throw ValidationException::withMessages([
                            'expertise_items' => ["Points for item {$index} must be an array"]
                        ]);
                    }

                    // Icon is optional, but if provided, should be a string
                    if (isset($item['icon']) && !is_string($item['icon'])) {
                        throw ValidationException::withMessages([
                            'expertise_items' => ["Icon for item {$index} must be a string"]
                        ]);
                    }
                }
            }

            // Additional validation for challenge items structure
            if (isset($data['challenge_items']) && is_array($data['challenge_items'])) {
                foreach ($data['challenge_items'] as $index => $item) {
                    if (!isset($item['title']) || !isset($item['description']) || !isset($item['icon'])) {
                        throw ValidationException::withMessages([
                            'challenge_items' => ["Challenge item {$index} is missing required fields (title, description, icon)"]
                        ]);
                    }
                }
            }

            // Create a validator instance with our processed data
            $validator = \Illuminate\Support\Facades\Validator::make($data, [
                'title' => 'required|string|max:255',
                'description' => 'required|string',
                // Hero Section
                'hero_eyebrow' => 'required|string|max:255',
                'hero_title' => 'required|string|max:255',
                'hero_description' => 'required|string',
                'hero_button_text' => 'required|string|max:255',
                // Challenge Section
                'challenge_eyebrow' => 'required|string|max:255',
                'challenge_title' => 'required|string|max:255',
                'challenge_description' => 'required|string',
                'challenge_items' => 'nullable|array',
                // Expertise Section
                'expertise_eyebrow' => 'required|string|max:255',
                'expertise_title' => 'required|string|max:255',
                'expertise_description' => 'required|string',
                'expertise_items' => 'required|array',
                'display_order' => 'nullable|integer'
            ]);

            if ($validator->fails()) {
                throw new ValidationException($validator);
            }

            $validated = $validator->validated();

            // Find the sector
            $sector = ServiceSector::where('type', $type)->firstOrFail();

            // Update the sector with the validated data
            $sector->update($data);

            // Debug: Log updated sector data
            Log::info('Updated sector data:', [
                'sector_id' => $sector->id,
                'expertise_items' => $sector->expertise_items
            ]);

            DB::commit();

            if ($request->expectsJson()) {
                return response()->json(['success' => true, 'message' => 'Sector updated successfully']);
            }
            return back()->with('success', 'Sector updated successfully.');

        } catch (ValidationException $e) {
            DB::rollBack();
            Log::error('Validation error:', [
                'errors' => $e->errors(),
                'data' => $data ?? null
            ]);
            if ($request->expectsJson()) {
                return response()->json([
                    'success' => false,
                    'errors' => $e->errors()
                ], 422);
            }
            return back()->withErrors($e->errors())->withInput();

        } catch (\Exception $e) {
            DB::rollBack();
            Log::error('Error updating sector:', [
                'error' => $e->getMessage(),
                'trace' => $e->getTraceAsString()
            ]);
            if ($request->expectsJson()) {
                return response()->json([
                    'success' => false,
                    'error' => 'Failed to update sector: ' . $e->getMessage()
                ], 500);
            }
            return back()->withErrors(['error' => 'Failed to update sector: ' . $e->getMessage()])->withInput();
        }
    }
}

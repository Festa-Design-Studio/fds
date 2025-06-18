<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\File;
use Illuminate\Support\Facades\Log;
use Illuminate\Support\Str;

class ImageController extends Controller
{
    /**
     * Handle image uploads from the rich text editor
     *
     * @return \Illuminate\Http\Response
     */
    public function upload(Request $request)
    {
        Log::info('Image upload request received');

        try {
            // Validate request
            if (! $request->hasFile('image')) {
                Log::error('No image file in request');

                if ($request->wantsJson() || $request->ajax()) {
                    return response()->json([
                        'success' => false,
                        'message' => 'No image file found in request',
                    ], 400);
                }

                return redirect()->back()->with('error', 'No image file found in request');
            }

            // Get the image file
            $file = $request->file('image');

            // Log file details
            Log::info('File received: '.$file->getClientOriginalName().' ('.$file->getSize().' bytes, mime: '.$file->getMimeType().')');

            // Validate the file more permissively
            if (! $file->isValid()) {
                Log::error('Invalid file upload: '.$file->getErrorMessage());

                return response()->json(['success' => false, 'message' => 'Invalid file: '.$file->getErrorMessage()], 400);
            }

            // Create a unique filename
            $filename = 'img_'.time().'_'.Str::random(6).'.'.$file->getClientOriginalExtension();

            // DIRECT METHOD: Store directly in the public directory
            // This is the simplest approach and most likely to work
            try {
                // Ensure the uploads directory exists
                $uploadDir = public_path('uploads');
                if (! File::exists($uploadDir)) {
                    File::makeDirectory($uploadDir, 0755, true);
                    Log::info('Created uploads directory: '.$uploadDir);
                }

                // Move the file
                $file->move($uploadDir, $filename);
                $fileUrl = asset('uploads/'.$filename);

                Log::info('File successfully saved to: '.$uploadDir.'/'.$filename);
                Log::info('File URL: '.$fileUrl);

                // Return success response
                return response()->json([
                    'success' => true,
                    'url' => $fileUrl,
                ]);
            } catch (\Exception $e) {
                Log::error('Failed to save file: '.$e->getMessage());
                Log::error($e->getTraceAsString());

                return response()->json([
                    'success' => false,
                    'message' => 'Failed to save the uploaded image: '.$e->getMessage(),
                ], 500);
            }
        } catch (\Exception $e) {
            Log::error('Image upload exception: '.$e->getMessage());
            Log::error($e->getTraceAsString());

            return response()->json([
                'success' => false,
                'message' => 'Image upload failed: '.$e->getMessage(),
            ], 500);
        }
    }
}

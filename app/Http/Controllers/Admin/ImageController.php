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
            // Validate request with security constraints
            $request->validate([
                'image' => [
                    'required',
                    'image',
                    'mimes:jpeg,jpg,png,gif,webp',
                    'max:5120', // 5MB max file size
                    'dimensions:max_width=4000,max_height=4000', // Prevent extremely large images
                ]
            ]);

            // Get the image file
            $file = $request->file('image');

            // Log file details
            Log::info('File received: '.$file->getClientOriginalName().' ('.$file->getSize().' bytes, mime: '.$file->getMimeType().')');

            // Additional MIME type validation for security
            $allowedMimes = ['image/jpeg', 'image/jpg', 'image/png', 'image/gif', 'image/webp'];
            if (!in_array($file->getMimeType(), $allowedMimes)) {
                Log::error('Invalid MIME type: '.$file->getMimeType());
                return response()->json(['success' => false, 'message' => 'Invalid file type'], 400);
            }

            // Validate the file
            if (! $file->isValid()) {
                Log::error('Invalid file upload: '.$file->getErrorMessage());

                return response()->json(['success' => false, 'message' => 'Invalid file: '.$file->getErrorMessage()], 400);
            }

            // Create a secure unique filename with sanitized extension
            $extension = strtolower($file->getClientOriginalExtension());
            // Only allow specific extensions for extra security
            $allowedExtensions = ['jpg', 'jpeg', 'png', 'gif', 'webp'];
            if (!in_array($extension, $allowedExtensions)) {
                return response()->json(['success' => false, 'message' => 'Invalid file extension'], 400);
            }
            $filename = 'img_'.time().'_'.Str::random(10).'.'.$extension;

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

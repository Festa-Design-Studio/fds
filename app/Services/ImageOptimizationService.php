<?php

namespace App\Services;

use Illuminate\Http\UploadedFile;
use Intervention\Image\ImageManager;
use Intervention\Image\Drivers\Gd\Driver;

class ImageOptimizationService
{
    private ImageManager $manager;

    public function __construct()
    {
        $this->manager = new ImageManager(new Driver());
    }

    /**
     * Optimize uploaded image for web use
     */
    public function optimizeImage(UploadedFile $file, string $storagePath): string
    {
        $image = $this->manager->read($file->getPathname());
        
        // Get original dimensions
        $width = $image->width();
        $height = $image->height();
        
        // Resize if too large (max 1920px width for large images)
        if ($width > 1920) {
            $image->resize(1920, null, function ($constraint) {
                $constraint->aspectRatio();
                $constraint->upsize();
            });
        }
        
        // Generate optimized filename
        $extension = strtolower($file->getClientOriginalExtension());
        $filename = pathinfo($file->getClientOriginalName(), PATHINFO_FILENAME);
        $optimizedFilename = $filename . '_optimized.' . $extension;
        $fullPath = $storagePath . '/' . $optimizedFilename;
        
        // Save with compression based on file type
        switch ($extension) {
            case 'jpg':
            case 'jpeg':
                $image->toJpeg(80)->save($fullPath);
                break;
            case 'png':
                $image->toPng()->save($fullPath);
                break;
            case 'webp':
                $image->toWebp(80)->save($fullPath);
                break;
            default:
                // Fallback to JPEG for other formats
                $optimizedFilename = $filename . '_optimized.jpg';
                $fullPath = $storagePath . '/' . $optimizedFilename;
                $image->toJpeg(80)->save($fullPath);
        }
        
        return $optimizedFilename;
    }

    /**
     * Create multiple sizes for responsive images
     */
    public function createResponsiveSizes(UploadedFile $file, string $storagePath): array
    {
        $image = $this->manager->read($file->getPathname());
        $filename = pathinfo($file->getClientOriginalName(), PATHINFO_FILENAME);
        
        $sizes = [
            'thumbnail' => 300,
            'medium' => 768,
            'large' => 1200,
            'xlarge' => 1920
        ];
        
        $generatedFiles = [];
        
        foreach ($sizes as $sizeName => $maxWidth) {
            if ($image->width() > $maxWidth) {
                $resized = clone $image;
                $resized->resize($maxWidth, null, function ($constraint) {
                    $constraint->aspectRatio();
                    $constraint->upsize();
                });
                
                $sizedFilename = $filename . '_' . $sizeName . '.jpg';
                $fullPath = $storagePath . '/' . $sizedFilename;
                
                $resized->toJpeg(80)->save($fullPath);
                $generatedFiles[$sizeName] = $sizedFilename;
            }
        }
        
        return $generatedFiles;
    }
}
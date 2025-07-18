<?php

namespace App\Traits;

trait HasSeoFields
{
    /**
     * Get the SEO fields that should be included in the model's fillable array
     */
    public static function getSeoFillableFields(): array
    {
        return [
            'meta_description',
            'meta_keywords',
            'og_title',
            'og_description',
            'og_image',
            'twitter_title',
            'twitter_description',
            'twitter_image',
            'structured_data',
        ];
    }

    /**
     * Get the SEO fields that should be cast to array
     */
    public static function getSeoCastFields(): array
    {
        return [
            'structured_data' => 'array',
        ];
    }

    /**
     * Get SEO meta data for view rendering
     */
    public function getSeoData(): array
    {
        return [
            'meta_description' => $this->meta_description,
            'meta_keywords' => $this->meta_keywords,
            'og_title' => $this->og_title,
            'og_description' => $this->og_description,
            'og_image' => $this->og_image,
            'twitter_title' => $this->twitter_title,
            'twitter_description' => $this->twitter_description,
            'twitter_image' => $this->twitter_image,
            'structured_data' => $this->structured_data,
        ];
    }

    /**
     * Get Open Graph meta tags for the model
     */
    public function getOpenGraphTags(): array
    {
        return [
            'og:title' => $this->og_title ?: $this->title ?? config('app.name'),
            'og:description' => $this->og_description ?: $this->meta_description ?? '',
            'og:image' => $this->og_image ?: asset('images/festa-og-image.jpg'),
            'og:url' => url()->current(),
            'og:type' => 'article',
            'og:site_name' => config('app.name'),
        ];
    }

    /**
     * Get Twitter Card meta tags for the model
     */
    public function getTwitterCardTags(): array
    {
        return [
            'twitter:card' => 'summary_large_image',
            'twitter:title' => $this->twitter_title ?: $this->title ?? config('app.name'),
            'twitter:description' => $this->twitter_description ?: $this->meta_description ?? '',
            'twitter:image' => $this->twitter_image ?: asset('images/festa-twitter-card.jpg'),
        ];
    }

    /**
     * Generate structured data for the model
     */
    public function generateStructuredData(): array
    {
        $structuredData = [
            '@context' => 'https://schema.org',
            '@type' => $this->getSchemaType(),
            'name' => $this->title ?? '',
            'description' => $this->meta_description ?? $this->excerpt ?? '',
            'url' => $this->getModelUrl(),
        ];

        if ($this->featured_image ?? $this->image_path ?? false) {
            $structuredData['image'] = asset('storage/' . ($this->featured_image ?? $this->image_path));
        }

        if (method_exists($this, 'created_at') && $this->created_at) {
            $structuredData['dateCreated'] = $this->created_at->toISOString();
        }

        if (method_exists($this, 'updated_at') && $this->updated_at) {
            $structuredData['dateModified'] = $this->updated_at->toISOString();
        }

        return $structuredData;
    }

    /**
     * Get the Schema.org type for this model
     * Override this method in your model to specify the correct type
     */
    protected function getSchemaType(): string
    {
        return 'Thing';
    }

    /**
     * Get the URL for this model
     * Override this method in your model to specify the correct URL
     */
    protected function getModelUrl(): string
    {
        if (method_exists($this, 'getRouteKey') && method_exists($this, 'getRouteKeyName')) {
            $routeName = strtolower(class_basename($this)) . '.show';
            try {
                return route($routeName, $this->getRouteKey());
            } catch (\Exception $e) {
                // Fall back to current URL if route doesn't exist
                return url()->current();
            }
        }
        
        return url()->current();
    }
}
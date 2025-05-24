# Responsive Video container component

This component is designed to seamlessly embed and display videos in Festa's article posts and client works showcase. It ensures a consistent, responsive, and visually appealing presentation while maintaining brand aesthetics and accessibility standards across all content types.

code snippets for responsive **video container component**:

```html
<!-- Video embedded from Vimeo with accessible caption component -->
                    <figure
                        class="bg-white-smoke-50 rounded-lg border border-white-smoke-300 p-4 md:p-8 lg:p-8 mx-auto">
                        <div class="relative w-full aspect-video overflow-hidden rounded-lg">
                            <iframe
                                src="https://player.vimeo.com/video/1036820501?badge=0&amp;autopause=0&amp;player_id=0&amp;app_id=58479"
                                allow="autoplay; fullscreen; picture-in-picture; clipboard-write; encrypted-media"
                                allowfullscreen title="Horizontal: Empowering Youth Voices"
                                class="absolute inset-0 w-full h-full rounded-lg focus:outline-none focus:ring-2 focus:ring-pepper-green-600"
                                tabindex="0" aria-label="Video player: Horizontal: Empowering Youth Voices"></iframe>
                        </div>
                        <figcaption class="mt-4 text-pepper-green-700 text-body-sm text-center">
                            Brief accessible caption or description of the video content.
                        </figcaption>
                    </figure>
```

**Key points:**

Uses Tailwind’s aspect-video for 16:9 responsiveness instead of inline padding and absolute positioning.

Caption styled for festa brand: "text-pepper-green-700 text-body-sm text-center.

Fully accessible with relevant title and aria-label.

**Implementation in Laravel Blade:**

Since we're using Laravel Blade for templating and including CRUD functionality through an admin backend, here's how to implement this:

```php
{{-- views/components/core/video-container.blade.php --}}
@props(['embedCode', 'caption'])

<figure class="bg-white-smoke-50 rounded-lg border border-white-smoke-300 p-4 md:p-8 lg:p-8 mx-auto">
    <div class="relative w-full aspect-video overflow-hidden rounded-lg">
        {!! $embedCode !!}
    </div>
    <figcaption class="mt-4 text-pepper-green-700 text-body-sm text-center">
        {{ $caption }}
    </figcaption>
</figure>
```

**Admin Form Fields:**

- Create a form in the admin panel with:
- A textarea labeled "Insert Vimeo Embed Code" for the embed iframe code
- A text input for the video caption

**Usage in Blade Views:**

```php
{{-- In your content view --}}
<x-video-container 
    :embedCode="$video->embed_code"
    :caption="$video->caption"
/>
```

This approach maintains the component's responsiveness and accessibility while allowing for dynamic content management through the admin backend.

Another Usage is to use in “create”, “edit” of Festa’s custom rich text editor.
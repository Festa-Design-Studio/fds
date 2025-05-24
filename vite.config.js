import { defineConfig } from 'vite';
import laravel from 'laravel-vite-plugin';

export default defineConfig({
    plugins: [
        laravel({
            input: [
                'resources/css/app.css',
                'resources/css/toolkit-filters.css',
                'resources/css/festa-rich-text-editor.css',
                'resources/js/app.js',
                'resources/js/toolkit-filter.js',
                'resources/js/mobile.js',
                'resources/js/festa-rich-text-editor.js',
                'resources/js/festa-editor-init.js',
                'resources/js/add-video-button.js',
                'resources/js/force-video-button.js'
            ],
            refresh: true,
        }),
    ],
});

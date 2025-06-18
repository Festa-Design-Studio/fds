<?php

namespace Database\Seeders;

use App\Models\Toolkit;
use App\Models\ToolkitCategory;
use Illuminate\Database\Seeder;

class ToolkitSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        // Get categories
        $designTools = ToolkitCategory::where('slug', 'design-tools')->first();
        $development = ToolkitCategory::where('slug', 'development')->first();
        $analytics = ToolkitCategory::where('slug', 'analytics')->first();
        $productivity = ToolkitCategory::where('slug', 'productivity')->first();

        $toolkits = [
            [
                'title' => 'Figma',
                'description' => 'A collaborative interface design tool that runs in the browser.',
                'link_url' => 'https://figma.com',
                'link_text' => 'Visit Figma',
                'toolkit_category_id' => $designTools->id,
                'tags' => ['design', 'prototyping', 'collaboration'],
                'is_featured' => true,
                'is_published' => true,
                'published_at' => now(),
                'sort_order' => 1,
            ],
            [
                'title' => 'Visual Studio Code',
                'description' => 'A free, lightweight code editor with powerful developer tooling.',
                'link_url' => 'https://code.visualstudio.com',
                'link_text' => 'Download VS Code',
                'toolkit_category_id' => $development->id,
                'tags' => ['code-editor', 'development', 'microsoft'],
                'is_featured' => false,
                'is_published' => true,
                'published_at' => now(),
                'sort_order' => 2,
            ],
            [
                'title' => 'Google Analytics',
                'description' => 'Web analytics service that tracks and reports website traffic.',
                'link_url' => 'https://analytics.google.com',
                'link_text' => 'Open Analytics',
                'toolkit_category_id' => $analytics->id,
                'tags' => ['analytics', 'tracking', 'google'],
                'is_featured' => false,
                'is_published' => true,
                'published_at' => now(),
                'sort_order' => 3,
            ],
            [
                'title' => 'Notion',
                'description' => 'An all-in-one workspace for notes, tasks, wikis, and databases.',
                'link_url' => 'https://notion.so',
                'link_text' => 'Try Notion',
                'toolkit_category_id' => $productivity->id,
                'tags' => ['productivity', 'notes', 'collaboration'],
                'is_featured' => false,
                'is_published' => true,
                'published_at' => now(),
                'sort_order' => 4,
            ],
            [
                'title' => 'Adobe XD',
                'description' => 'User experience design software for web and mobile apps.',
                'link_url' => 'https://helpx.adobe.com/xd/',
                'link_text' => 'Learn More',
                'toolkit_category_id' => $designTools->id,
                'tags' => ['design', 'ux', 'adobe'],
                'is_featured' => false,
                'is_published' => true,
                'published_at' => now(),
                'sort_order' => 5,
            ],
            [
                'title' => 'GitHub',
                'description' => 'A platform for version control and collaboration for software development.',
                'link_url' => 'https://github.com',
                'link_text' => 'Visit GitHub',
                'toolkit_category_id' => $development->id,
                'tags' => ['git', 'version-control', 'collaboration'],
                'is_featured' => false,
                'is_published' => true,
                'published_at' => now(),
                'sort_order' => 6,
            ],
        ];

        foreach ($toolkits as $toolkit) {
            Toolkit::create($toolkit);
        }
    }
}

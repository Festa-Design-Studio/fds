<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\ToolkitCategory;

class ToolkitCategorySeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $categories = [
            [
                'name' => 'Design Tools',
                'slug' => 'design-tools',
                'description' => 'Tools for design and prototyping',
                'color_class' => 'bg-pepper-green-50 text-pepper-green-700 border-pepper-green-200',
                'is_active' => true,
                'sort_order' => 1,
            ],
            [
                'name' => 'Development',
                'slug' => 'development',
                'description' => 'Development and coding tools',
                'color_class' => 'bg-chicken-comb-50 text-chicken-comb-700 border-chicken-comb-200',
                'is_active' => true,
                'sort_order' => 2,
            ],
            [
                'name' => 'Analytics',
                'slug' => 'analytics',
                'description' => 'Analytics and measurement tools',
                'color_class' => 'bg-pot-of-gold-50 text-pot-of-gold-700 border-pot-of-gold-200',
                'is_active' => true,
                'sort_order' => 3,
            ],
            [
                'name' => 'Productivity',
                'slug' => 'productivity',
                'description' => 'Productivity and collaboration tools',
                'color_class' => 'bg-apocalyptic-orange-50 text-apocalyptic-orange-700 border-apocalyptic-orange-200',
                'is_active' => true,
                'sort_order' => 4,
            ],
        ];

        foreach ($categories as $category) {
            ToolkitCategory::create($category);
        }
    }
}

<?php

namespace Database\Seeders;

use App\Models\Industry;
use App\Models\Project;
use App\Models\SdgAlignment;
use App\Models\Sector;
use Illuminate\Database\Seeder;
use Illuminate\Support\Str;

class SectorIndustrySDGSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        // Create sectors
        $sectors = [
            'Nonprofit',
            'Startup',
            'Social Enterprise',
            'Corporate',
            'Government',
        ];

        foreach ($sectors as $name) {
            Sector::create([
                'name' => $name,
                'slug' => Str::slug($name),
            ]);
        }

        // Create industries
        $industries = [
            'Education',
            'Healthcare',
            'Research and Development',
            'Environment',
            'Social Justice',
            'Arts & Culture',
            'Technology',
        ];

        foreach ($industries as $name) {
            Industry::create([
                'name' => $name,
                'slug' => Str::slug($name),
            ]);
        }

        // Create SDG alignments
        $sdgAlignments = [
            ['name' => 'No Poverty', 'code' => 'sdg1'],
            ['name' => 'Zero Hunger', 'code' => 'sdg2'],
            ['name' => 'Good Health & Well-being', 'code' => 'sdg3'],
            ['name' => 'Quality Education', 'code' => 'sdg4'],
            ['name' => 'Gender Equality', 'code' => 'sdg5'],
            ['name' => 'Clean Water and Sanitation', 'code' => 'sdg6'],
            ['name' => 'Affordable and Clean Energy', 'code' => 'sdg7'],
            ['name' => 'Decent Work and Economic Growth', 'code' => 'sdg8'],
            ['name' => 'Industry, Innovation and Infrastructure', 'code' => 'sdg9'],
            ['name' => 'Reduced Inequalities', 'code' => 'sdg10'],
            ['name' => 'Sustainable Cities and Communities', 'code' => 'sdg11'],
            ['name' => 'Responsible Consumption and Production', 'code' => 'sdg12'],
            ['name' => 'Climate Action', 'code' => 'sdg13'],
            ['name' => 'Life Below Water', 'code' => 'sdg14'],
            ['name' => 'Life on Land', 'code' => 'sdg15'],
            ['name' => 'Peace, Justice and Strong Institutions', 'code' => 'sdg16'],
            ['name' => 'Partnerships for the Goals', 'code' => 'sdg17'],
        ];

        foreach ($sdgAlignments as $item) {
            SdgAlignment::create([
                'name' => $item['name'],
                'slug' => Str::slug($item['name']),
                'code' => $item['code'],
            ]);
        }

        // Update existing projects with relations to these new entities
        $this->updateExistingProjects();
    }

    /**
     * Update existing projects with relations to the new entities.
     */
    private function updateExistingProjects(): void
    {
        $projects = Project::all();

        foreach ($projects as $project) {
            // Map sector
            if ($project->sector) {
                $sectorName = ucfirst($project->sector);
                $sector = Sector::where('name', 'like', "%$sectorName%")->first();
                if ($sector) {
                    $project->sector_id = $sector->id;
                }
            }

            // Map industry
            if ($project->industry) {
                $industryName = str_replace('-', ' ', $project->industry);
                $industryName = ucwords($industryName);
                $industry = Industry::where('name', 'like', "%$industryName%")->first();
                if ($industry) {
                    $project->industry_id = $industry->id;
                }
            }

            // Map SDG alignment
            if ($project->sdg_alignment) {
                $sdgAlignment = SdgAlignment::where('code', $project->sdg_alignment)->first();
                if ($sdgAlignment) {
                    $project->sdg_alignment_id = $sdgAlignment->id;
                }
            }

            $project->save();
        }
    }
}

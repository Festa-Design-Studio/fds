<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Str;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\TeamMember>
 */
class TeamMemberFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        $name = $this->faker->name();
        $positions = ['UX Designer', 'Frontend Developer', 'Project Manager', 'Design Lead', 'Marketing Strategist', 'Content Writer'];
        $title = $this->faker->randomElement($positions).', Festa Design Studio';

        return [
            'name' => $name,
            'slug' => Str::slug($name),
            'title' => $title,
            'email' => $this->faker->safeEmail(),
            'linkedin' => 'https://linkedin.com/in/'.Str::slug($name),
            'summary' => $this->faker->paragraphs(3, true),
            'professional_experience' => json_encode([
                [
                    'title' => 'Senior '.$this->faker->randomElement($positions),
                    'company' => $this->faker->company(),
                    'period' => '2020 - Present',
                    'description' => $this->faker->paragraph(),
                    'logo' => '/src/img/fds-logomark.png',
                ],
                [
                    'title' => 'Junior '.$this->faker->randomElement($positions),
                    'company' => $this->faker->company(),
                    'period' => '2018 - 2020',
                    'description' => $this->faker->paragraph(),
                    'logo' => '/src/img/tekedu.png',
                ],
            ]),
            'volunteer_experience' => json_encode([
                [
                    'title' => 'Volunteer '.$this->faker->jobTitle(),
                    'company' => $this->faker->company(),
                    'period' => '2019 - 2021',
                    'description' => $this->faker->paragraph(),
                    'logo' => '/src/img/Global_Shapers_Logo.svg',
                ],
            ]),
            'education' => json_encode([
                [
                    'degree' => 'Bachelor of '.$this->faker->randomElement(['Arts', 'Science', 'Design', 'Engineering']),
                    'institution' => $this->faker->company().' University',
                ],
                [
                    'degree' => 'Master of '.$this->faker->randomElement(['Arts', 'Science', 'Design', 'Engineering']),
                    'institution' => $this->faker->company().' Institute',
                ],
            ]),
            'certifications' => json_encode([
                [
                    'name' => 'Certified '.$this->faker->randomElement(['UX Designer', 'Web Developer', 'Project Manager', 'Digital Marketer']),
                    'institution' => $this->faker->company(),
                    'logo' => '/src/img/ux-design-institute.jpeg',
                ],
                [
                    'name' => 'Advanced '.$this->faker->randomElement(['UX Research', 'Frontend Development', 'Marketing Analytics']),
                    'institution' => $this->faker->company(),
                    'logo' => '/src/img/general-assembly.png',
                ],
            ]),
            'skills' => json_encode([
                'UX Design' => ['User Research', 'Wireframing', 'Prototyping', 'Usability Testing'],
                'Development' => ['HTML', 'CSS', 'JavaScript', 'Tailwind CSS'],
                'Tools' => ['Figma', 'Adobe XD', 'Sketch', 'InVision'],
            ]),
            'press' => json_encode([
                [
                    'title' => $this->faker->sentence(),
                    'source' => $this->faker->company(),
                    'url' => $this->faker->url(),
                ],
                [
                    'title' => $this->faker->sentence(),
                    'source' => $this->faker->company(),
                    'url' => $this->faker->url(),
                ],
            ]),
        ];
    }
}

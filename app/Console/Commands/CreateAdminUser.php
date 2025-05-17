<?php

namespace App\Console\Commands;

use App\Models\User;
use Illuminate\Console\Command;
use Illuminate\Support\Facades\Hash;

class CreateAdminUser extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'app:create-admin-user {email?} {name?} {password?} {title?} {profile_photo_path?}';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Create an admin user for testing';

    /**
     * Execute the console command.
     */
    public function handle()
    {
        $email = $this->argument('email') ?? 'admin@example.com';
        $name = $this->argument('name') ?? 'Admin User';
        $password = $this->argument('password') ?? 'password';
        $title = $this->argument('title') ?? 'Founder Festa Design Studio';
        $profilePhotoPath = $this->argument('profile_photo_path') ?? null; // e.g., 'team-members/abayomi.jpg'

        // Check if user already exists
        $existingUser = User::where('email', $email)->first();
        if ($existingUser) {
            $this->error("User with email {$email} already exists!");
            return 1;
        }

        // Create the user
        $user = User::create([
            'name' => $name,
            'email' => $email,
            'password' => Hash::make($password),
            'email_verified_at' => now(),
            'title' => $title,
            'profile_photo_path' => $profilePhotoPath,
        ]);

        $this->info("Admin user created successfully!");
        $this->table(
            ['Name', 'Email', 'Password', 'Title', 'Profile Photo Path'],
            [[$user->name, $user->email, $password, $user->title, $user->profile_photo_path]]
        );

        return 0;
    }
} 
<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class TeamMember extends Model
{
    use HasFactory;

    /**
     * The attributes that are mass assignable.
     *
     * @var array<int, string>
     */
    protected $fillable = [
        'name',
        'slug',
        'title',
        'email',
        'linkedin',
        'summary',
        'professional_experience',
        'volunteer_experience',
        'education',
        'certifications',
        'skills',
        'press',
        'avatar',
    ];

    /**
     * The attributes that should be cast.
     *
     * @var array<string, string>
     */
    protected $casts = [
        'professional_experience' => 'array',
        'volunteer_experience' => 'array',
        'education' => 'array',
        'certifications' => 'array',
        'skills' => 'array',
        'press' => 'array',
    ];

    /**
     * Get the route key for the model.
     *
     * @return string
     */
    public function getRouteKeyName()
    {
        return 'slug';
    }
}

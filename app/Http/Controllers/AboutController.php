<?php

namespace App\Http\Controllers;

use App\Models\TeamMember;

class AboutController extends Controller
{
    public function index()
    {
        $teamMembers = TeamMember::orderBy('name')->take(3)->get();

        return view('about.index', compact('teamMembers'));
    }

    public function team()
    {
        $teamMembers = TeamMember::orderBy('name')->get();

        return view('about.team', compact('teamMembers'));
    }

    public function process()
    {
        return view('about.our-process');
    }

    public function focus()
    {
        return view('about.focus');
    }

    public function designForGood()
    {
        return view('about.we-design-for-good');
    }
}

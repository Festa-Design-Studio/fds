<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AboutController extends Controller
{
    public function index()
    {
        return view('about.index');
    }

    public function team()
    {
        return view('about.team');
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
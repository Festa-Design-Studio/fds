<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class UtilityController extends Controller
{
    public function privacy()
    {
        return view('utility.privacy');
    }

    public function terms()
    {
        return view('utility.terms');
    }

    public function sitemap()
    {
        return view('utility.sitemap');
    }
} 
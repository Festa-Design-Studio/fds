<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ResourcesController extends Controller
{
    public function blog()
    {
        return view('resources.blog.index');
    }

    public function toolkit()
    {
        return view('resources.toolkit.index');
    }

    public function designSystem()
    {
        return view('resources.design-system.index');
    }
} 
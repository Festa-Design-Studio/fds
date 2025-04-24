<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class WorkController extends Controller
{
    public function index()
    {
        return view('work.index');
    }

    public function caseStudy()
    {
        return view('work.case-study');
    }
} 
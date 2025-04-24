<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ServicesController extends Controller
{
    public function index()
    {
        return view('services.index');
    }

    public function projectDesign()
    {
        return view('services.project-design');
    }

    public function communicationDesign()
    {
        return view('services.communication-design');
    }

    public function campaignDesign()
    {
        return view('services.campaign-design');
    }

    public function nonprofits()
    {
        return view('services.sectors.nonprofits');
    }

    public function startup()
    {
        return view('services.sectors.startup');
    }
} 
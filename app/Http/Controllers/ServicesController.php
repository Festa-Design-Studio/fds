<?php

namespace App\Http\Controllers;

use App\Models\Service;
use App\Models\ServiceSector;

class ServicesController extends Controller
{
    public function index()
    {
        return view('services.index');
    }

    public function projectDesign()
    {
        $service = Service::where('type', 'project_design')
            ->with('deliverables')
            ->firstOrFail();

        return view('services.project-design', compact('service'));
    }

    public function communicationDesign()
    {
        $service = Service::where('type', 'communication_design')
            ->with('deliverables')
            ->firstOrFail();

        return view('services.communication-design', compact('service'));
    }

    public function campaignDesign()
    {
        $service = Service::where('type', 'campaign_design')
            ->with('deliverables')
            ->firstOrFail();

        return view('services.campaign-design', compact('service'));
    }

    public function nonprofits()
    {
        $sector = ServiceSector::where('type', 'nonprofit')->firstOrFail();

        return view('services.sectors.nonprofits', compact('sector'));
    }

    public function startup()
    {
        $sector = ServiceSector::where('type', 'startup')->firstOrFail();

        return view('services.sectors.startup', compact('sector'));
    }
}

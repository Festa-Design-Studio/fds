<?php

namespace App\Http\Controllers;

use App\Models\Service;
use App\Models\ServiceSector;
use Illuminate\Support\Facades\Cache;

class ServicesController extends Controller
{
    public function index()
    {
        // Get main page content
        $mainPage = Cache::remember('services.main_page', 3600, function () {
            return Service::where('type', 'main_page')->first();
        });

        // Get services for the cards
        $services = Cache::remember('services.all', 3600, function () {
            return Service::whereIn('type', ['project_design', 'communication_design', 'campaign_design'])
                ->where('is_active', true)
                ->orderBy('display_order')
                ->get();
        });

        return view('services.index', compact('mainPage', 'services'));
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

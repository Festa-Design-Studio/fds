<?php

namespace App\Http\Controllers;

use App\Models\PageSeo;
use App\Models\TeamMember;
use App\Models\DesignForGoodContent;
use App\Models\OurProcess;

class AboutController extends Controller
{
    public function index()
    {
        $teamMembers = TeamMember::orderBy('name')->take(3)->get();
        $pageSeo = PageSeo::getForPage('about');

        return view('about.index', compact('teamMembers', 'pageSeo'));
    }

    public function team()
    {
        $teamMembers = TeamMember::orderBy('name')->get();

        return view('about.team', compact('teamMembers'));
    }

    public function process()
    {
        // Get process data from database
        $philosophyItems = OurProcess::philosophy()->get();
        $methodologyItems = OurProcess::methodology()->get();
        $impactItems = OurProcess::impact()->get();

        return view('about.our-process', compact('philosophyItems', 'methodologyItems', 'impactItems'));
    }

    public function focus()
    {
        return view('about.focus');
    }

    public function designForGood()
    {
        $pageSeo = PageSeo::getForPage('design_for_good');
        $contents = DesignForGoodContent::where('is_active', true)
                                       ->orderBy('display_order')
                                       ->get()
                                       ->keyBy('section_key');

        return view('about.we-design-for-good', compact('pageSeo', 'contents'));
    }
}

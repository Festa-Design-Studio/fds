<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\ArticleRating;

class AdminController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        // In Laravel 12, we don't need to set middleware in the constructor
        // as it's normally handled in the routes file
    }

    /**
     * Show the admin dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function dashboard()
    {
        $totalRatings = ArticleRating::count();
        $averageRating = ArticleRating::avg('rating') ?? 0;
        
        return view('admin.dashboard', compact('totalRatings', 'averageRating'));
    }

    /**
     * Show the services admin page.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function services()
    {
        return view('admin.services');
    }

    /**
     * Show the work admin page.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function work()
    {
        return view('admin.work');
    }

    /**
     * Show the about admin page.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function about()
    {
        return view('admin.about');
    }

    /**
     * Show the toolkit admin page.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function toolkit()
    {
        return view('admin.toolkit');
    }

    /**
     * Show the design system admin page.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function designSystem()
    {
        return view('admin.design-system');
    }

    /**
     * Show the contact admin page.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function contact()
    {
        return view('admin.contact');
    }

    /**
     * Show the privacy admin page.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function privacy()
    {
        return view('admin.privacy');
    }

    /**
     * Show the terms admin page.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function terms()
    {
        return view('admin.terms');
    }

    /**
     * Show the settings admin page.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function settings()
    {
        return view('admin.settings');
    }

    /**
     * Show the users admin page.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function users()
    {
        return view('admin.users');
    }
}

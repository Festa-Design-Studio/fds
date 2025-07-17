<?php

namespace App\Http\Controllers;

use App\Models\PageSeo;

class ContactController extends Controller
{
    public function index()
    {
        $pageSeo = PageSeo::getForPage('contact');
        
        return view('contact.index', compact('pageSeo'));
    }

    public function talkToFesta()
    {
        return view('contact.talktofesta');
    }

    public function thankYou()
    {
        return view('contact.thank-you');
    }
}

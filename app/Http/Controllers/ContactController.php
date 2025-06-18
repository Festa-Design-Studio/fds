<?php

namespace App\Http\Controllers;

class ContactController extends Controller
{
    public function index()
    {
        return view('contact.index');
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

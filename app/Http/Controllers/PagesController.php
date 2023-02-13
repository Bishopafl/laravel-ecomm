<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PagesController extends Controller
{
    /**
     * Returns the about.blade apge
     * 
     */
    public function About()
    {
        return view('about');
    }

    /**
     * Returns the contact.blade apge
     * 
     */
    public function Contact()
    {
        return view('contact');
    }
}

<?php

namespace App\Http\Controllers;

class LandingController extends Controller
{
    public function index()
    {
        return view('landing.home');
    }

    public function about()
    {
        return view('landing.about');
    }

    public function service()
    {
        return view('landing.service');
    }

    public function feature()
    {
        return view('landing.feature');
    }

    public function project()
    {
        return view('landing.project');
    }

    public function contact()
    {
        return view('landing.contact');
    }
}

<?php

namespace App\Http\Controllers;

use App\Models\Panel;
use Illuminate\Http\Request;

class LandingController extends Controller
{
    public function index()
    {
        return view('landing.pages.home');
    }

    public function presentationSchedule()
    {
        $presentationSchedule = Panel::with('sessions.papers')->get();
        return view('landing.pages.presentation-schedule', compact('presentationSchedule'));
    }

    public function download()
    {
        return view('landing.pages.download');
    }
}

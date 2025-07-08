<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class LandingController extends Controller
{
    public function index()
    {
        return view('landing.pages.home');
    }

    public function presentationSchedule()
    {
        return view('landing.pages.presentation-schedule');
    }
}

<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PageController extends Controller
{
    public function home()
    {
        return view('home');
    }

    public function about()
    {
        return view('about');
    }

    public function contact()
    {
        return view('contact');
    }
    public function domain()
    {
        return view('domain');
    }
    public function hosting()
    {
        return view('hosting');
    }
    public function projects()
    {
        return view('projects');
    }
}

<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index(Request $request)
    {
        return view('frontend/homepage');
    }

    public function about(Request $request )
    {
        return view('frontend/about');
    }
    public function services(Request $request )
    {
        return view('frontend/services');
    }
    public function contact(Request $request )
    {
        return view('frontend/contact');
    }


}

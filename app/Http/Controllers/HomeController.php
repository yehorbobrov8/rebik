<?php

namespace App\Http\Controllers;

class HomeController extends Controller
{
    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('home');
    }


    public function about()
    {
        return view('about');
    }

    public function evidence()
    {
        return view('evidence');
    }
    public function contacts()
    {
        return view('contacts');
    }
}

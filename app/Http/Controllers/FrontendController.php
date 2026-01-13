<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class FrontendController extends Controller
{
    public function index()
    {
        return view('website.index');
    }

    public function about()
    {
        return view('website.about');
    }

    public function service()
    {
        return view('website.service');
    }

    public function portfolio()
    {
        return view('website.portfolio');
    }
    public function blog()
    {
        return view('website.blog');
    }
}

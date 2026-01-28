<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class AdminHomeController extends Controller
{
    public function homeBanner()
    {
        return view('admin.home.index');
    }

    public function homeAbout()
    {
        return view('admin.about.index');
    }

    public function homeSkill()
    {
        return view('admin.skill.index');
    }

    public function homeQualification()
    {
        return view('admin.qualification.index');
    }

    public function homeService()
    {
        return view('admin.service.index');
    }

    public function homePortfolio()
    {
        return view('admin.portfolio.index');
    }
}
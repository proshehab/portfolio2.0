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

    public function homeBannerUpdate(Request $request)
    {
        // Validate the incoming request data
        $request->validate([
            'title' => 'required|string|max:255',
            'subtitle' => 'required|string|max:255',
            'background_image' => 'nullable|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
        ]);

        // Process the data (e.g., save to database, upload image, etc.)
        // This is a placeholder for actual update logic
        // HomeBanner::update([...]);

        return redirect()->route('admin.home.banner')->with('success', 'Home banner updated successfully.');
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

    public function homeTestimonial()
    {
        return view('admin.testimonial.index');
    }

    public function homeBlog()
    {
        return view('admin.blog.index');
    }

    public function homeClient()
    {
        return view('admin.client.index');
    }
}
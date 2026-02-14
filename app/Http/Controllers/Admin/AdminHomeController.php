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
            'name' => 'required|string|max:255',
            'designation' => 'required|string|max:255',
            'description' => 'required|string',
            'button_text' => 'required|string|max:255',
            'button_url' => 'required|url',
            'subtitle' => 'required|string|max:255',
            'background_image' => 'nullable|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
        ]);
        // Handle the file upload if a new background image is provided
        if ($request->hasFile('background_image')) {
            $image = $request->file('background_image');
            $imageName = time() . '_' . $image->getClientOriginalName();
            $image->move(public_path('uploads/home'), $imageName);
            // Update the background image path in the database or configuration
        }

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
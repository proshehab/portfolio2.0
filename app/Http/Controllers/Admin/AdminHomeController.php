<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\HomePageItem;
use Illuminate\Http\Request;

class AdminHomeController extends Controller
{
    public function homeBanner()
    {
        $banner = HomePageItem::findOrFail(1);
        return view('admin.home.index', compact('banner'));
    }

    public function homeBannerUpdate(Request $request)
    {

        // Get the banner record (assuming single row with id = 1)
        $banner = HomePageItem::findOrFail(1);
        //dd($request->all());
        // Validate the incoming request data
        $request->validate([
            'banner_title' => 'required|string|max:255',
            'banner_name' => 'required|string|max:255',
            'banner_designation' => 'required|string|max:255',
            'banner_description' => 'required|string',
            'banner_button_text' => 'required|string|max:255',
            'banner_button_url' => 'required|url',
            'banner_image' => 'nullable|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
        ]);

        // Handle background image upload
        if ($request->hasFile('banner_image')) {

            // Delete old image if exists
            if ($banner->banner_image && file_exists(public_path($banner->banner_image))) {
                unlink(public_path($banner->banner_image));
            }

            $image = $request->file('banner_image');
            $imageName = time() . '_' . $image->getClientOriginalName();
            $image->move(public_path('upload/home'), $imageName);

            $banner->banner_image = 'upload/home/' . $imageName;
        }

        // Update other fields
        $banner->banner_title = $request->banner_title;
        $banner->banner_name = $request->banner_name;
        $banner->banner_designation = $request->banner_designation;
        $banner->banner_description = $request->banner_description;
        $banner->banner_button_text = $request->banner_button_text;
        $banner->banner_button_url = $request->banner_button_url;


        $banner->save();

        return redirect()->back()->with('success', 'Data is updated successfully.');
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
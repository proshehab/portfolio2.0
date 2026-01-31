<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('home_page_items', function (Blueprint $table) {
            $table->id();
            $table->string('banner_title');
            $table->string('banner_name');
            $table->string('banner_designation');
            $table->text('banner_description');
            $table->string('banner_button_text');
            $table->string('banner_button_url');
            $table->string('banner_image');
            $table->string('about_subtitle')->nullable();
            $table->string('about_title');
            $table->string('about_description')->nullable();
            $table->string('about_person_name')->nullable();
            $table->string('about_person_phone')->nullable();
            $table->string('about_person_email')->nullable();
            $table->string('about_icon1')->nullable();
            $table->string('about_icon1_url')->nullable();
            $table->string('about_icon2')->nullable();
            $table->string('about_icon2_url')->nullable();
            $table->string('about_icon3')->nullable();
            $table->string('about_icon3_url')->nullable();
            $table->string('about_icon4')->nullable();
            $table->string('about_icon4_url')->nullable();
            $table->string('about_icon5')->nullable();
            $table->string('about_icon5_url')->nullable();
            $table->string('about_photo');
            $table->string('about_status');
            $table->string('skill_subtitle')->nullable();
            $table->string('skill_title')->nullable();
            $table->string('skill_status');
            $table->string('qualification_subtitle')->nullable();
            $table->string('qualification_title')->nullable();
            $table->string('education_title')->nullable();
            $table->string('experience_title')->nullable();
            $table->string('qualification_status');
            $table->string('counter1_number');
            $table->string('counter1_name');
            $table->string('counter2_number');
            $table->string('counter2_name');
            $table->string('counter3_number');
            $table->string('counter3_name');
            $table->string('counter4_number');
            $table->string('counter4_name');
            $table->string('counter_background');
            $table->string('counter_status');
            $table->string('testimonial_subtitle')->nullable();
            $table->string('testimonial_title')->nullable();
            $table->string('testimonial_background');
            $table->string('testimonial_status');
            $table->string('client_subtitle')->nullable();
            $table->string('client_title')->nullable();
            $table->string('client_status');
            $table->string('service_subtitle')->nullable();
            $table->string('service_title')->nullable();
            $table->string('service_total');
            $table->string('service_status');
            $table->string('portfolio_subtitle')->nullable();
            $table->string('portfolio_title')->nullable();
            $table->string('portfolio_status');
            $table->string('blog_subtitle')->nullable();
            $table->string('blog_title')->nullable();
            $table->string('blog_status');
            $table->string('seo_title')->nullable();
            $table->string('seo_meta_description')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('home_page_items');
    }
};

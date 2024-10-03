<?php

namespace App\Http\Controllers;

use App\Models\Slide;
use App\Models\Apartment;
use App\Models\Testimonial;
use Illuminate\Http\Request;
use App\Models\PrivacyPolicy;
use App\Models\LocalAttraction;

class HomeController extends Controller
{
    public function index()
    {
        $slides = Slide::orderBy('sort')->get();
        $apartments = Apartment::orderBy('sort')->select('title', 'slug', 'thumbnail', 'address',"city")->get();
        $testimonials = Testimonial::where('home', true)->orderBy("sort")->get();




        return view('pages.home.index', compact("slides", "apartments", 'testimonials'));
    }

    public function attractions()
    {

        $attractions = LocalAttraction::orderBy('sort')->get();

        return view('pages.local-attractions.home', compact('attractions'));
    }

    public function location()
    {

        $apartments = Apartment::orderBy('sort')->select('title', 'slug', 'thumbnail', 'address', "city",'phone', 'mail', 'short_desc')->get();

        return view('pages.location.home', compact('apartments'));
    }

    public function contact()
    {
        return view('pages.contact.home');
    }

    public function privacyPolicy()
    {

        $privacyPolicy = PrivacyPolicy::firstOrFail();

        return view('pages.other.privacy-policy', compact('privacyPolicy'));
    }
}

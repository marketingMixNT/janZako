<?php

namespace App\Http\Controllers;

use App\Models\Home;
use App\Models\Slide;
use App\Models\Apartment;
use App\Models\Cta;
use App\Models\Testimonial;
use Illuminate\Http\Request;
use App\Models\PrivacyPolicy;
use App\Models\HomeContactPage;
use App\Models\LocalAttraction;
use App\Models\HomeLocationPage;

class HomeController extends Controller
{
    public function index()
    {

        $home = Home::firstOrFail();
        $apartments = Apartment::orderBy('sort')->select('title', 'slug', 'thumbnail', 'address', "city", 'short_desc')->get();
        $cta = Cta::firstOrFail();
        $testimonials = Testimonial::where('home', true)->orderBy("sort")->get();



        return view('pages.home.index', compact("apartments", 'testimonials', 'home', 'cta'));
    }

    public function attractions()
    {

        $home = Home::select('logo', 'phone', 'mail', 'booking_link')->firstOrFail();

        $attractions = LocalAttraction::orderBy('sort')->get();

        return view('pages.local-attractions.home', compact('attractions', 'home'));
    }

    public function location()
    {
        $home = Home::select('logo', 'phone', 'mail', 'booking_link')->firstOrFail();

        $locationPage = HomeLocationPage::firstOrFail();
        $apartments = Apartment::orderBy('sort')->select('title', 'slug', 'thumbnail', 'address', "city", 'phone', 'mail', 'short_desc')->get();

        return view('pages.location.home', compact('apartments', 'locationPage', 'home'));
    }

    public function contact()
    {

        $home = Home::select('logo', 'phone', 'mail', 'booking_link')->firstOrFail();

        $contactPage = HomeContactPage::firstOrFail();

        return view('pages.contact.home', compact('contactPage', 'home'));
    }
   

    public function privacyPolicy()
    {

        $home = Home::select('logo', 'phone', 'mail', 'booking_link')->firstOrFail();

        $privacyPolicy = PrivacyPolicy::firstOrFail();

        return view('pages.other.privacy-policy', compact('privacyPolicy', 'home'));
    }
}

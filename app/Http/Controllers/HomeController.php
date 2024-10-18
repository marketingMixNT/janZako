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

        $home = Home::with('socials')->firstOrFail();
        $apartments = Apartment::orderBy('sort')->select('title', 'slug', 'thumbnail', 'address', "city", 'short_desc', 'phone', 'phone_second')->get();
        $cta = Cta::firstOrFail();
        $testimonials = Testimonial::where('home', true)->orderBy("sort")->get();





        return view('pages.home.index', compact("apartments", 'testimonials', 'home', 'cta',));
    }

    public function attractions()
    {

        $home = Home::select('logo', 'phone', 'phone_second', 'mail', 'booking_link', 'bank', 'bank_account')
        ->addSelect(['id'])  // Dodaj 'id', aby relacje mogły się ładować
        ->with('socials')
        ->firstOrFail();

        $attractions = LocalAttraction::orderBy('sort')->get();

        $apartments = Apartment::orderBy('sort')->select('title',  'address', "city", 'phone', 'phone_second')->get();

        return view('pages.local-attractions.home', compact('attractions', 'home','apartments'));
    }

    public function location()
    {
        $home = Home::select('logo', 'phone', 'phone_second', 'mail', 'booking_link', 'bank', 'bank_account')
            ->addSelect(['id'])  // Dodaj 'id', aby relacje mogły się ładować
            ->with('socials')
            ->firstOrFail();

        

        $locationPage = HomeLocationPage::firstOrFail();
        $apartments = Apartment::orderBy('sort')->select('title', 'slug', 'thumbnail', 'address', "city", 'phone', 'phone_second', 'mail', 'short_desc')->get();

        return view('pages.location.home', compact('apartments', 'locationPage', 'home'));
    }

    public function contact()
    {

        $home = Home::select('logo', 'phone', 'phone_second', 'mail', 'booking_link', 'bank', 'bank_account','map')
            ->addSelect(['id'])  // Dodaj 'id', aby relacje mogły się ładować
            ->with('socials')
            ->firstOrFail();
        $apartments = Apartment::orderBy('sort')->select('title',  'address', "city", 'phone', 'phone_second')->get();

        $contactPage = HomeContactPage::firstOrFail();

        return view('pages.contact.home', compact('contactPage', 'home', 'apartments'));
    }


    public function privacyPolicy()
    {

        $home = Home::select('logo', 'phone', 'phone_second', 'mail', 'booking_link', 'bank', 'bank_account')
        ->addSelect(['id'])  // Dodaj 'id', aby relacje mogły się ładować
        ->with('socials')
        ->firstOrFail();

        $apartments = Apartment::orderBy('sort')->select('title',  'address', "city", 'phone', 'phone_second')->get();

        $privacyPolicy = PrivacyPolicy::firstOrFail();

        return view('pages.other.privacy-policy', compact('privacyPolicy', 'home', 'apartments'));
    }
}

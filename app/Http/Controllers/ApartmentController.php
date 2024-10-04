<?php

namespace App\Http\Controllers;

use App\Models\Cta;
use App\Models\Home;
use App\Models\Slide;
use App\Models\Apartment;
use Illuminate\Http\Request;
use App\Models\PrivacyPolicy;
use App\Models\LocalAttraction;
use App\Models\TestimonialHome;
use App\Models\HomeApartmentsPage;

class ApartmentController extends Controller
{
    public function index()
    {
        $home = Home::select('logo','phone','mail','booking_link')->firstOrFail();

        $apartmentPage = HomeApartmentsPage::firstOrFail();

        $apartments = Apartment::orderBy('sort')->select('title', 'slug', 'thumbnail', 'address','city', 'booking_link', 'map_link')->get();

        return view('pages.apartment.index', compact('apartments','apartmentPage','home'));
    }

    public function show($slug)
    {
        $apartment =
            Apartment::with('rooms', 'testimonials')
            ->select('id', 'title', 'slug', 'logo', 'phone', 'mail', 'address','city', 'map_link', 'slider_images', 'slider_heading', 'about_images', 'about_heading', 'about_text_first', 'about_text_second','rooms_heading',"rooms_text", 'booking_link', 'booking_script', 'google_reviews', 'google_reviews_link', 'google_reviews_average', 'tripadvisor_reviews', 'tripadvisor_reviews_link', 'tripadvisor_reviews_average',)

            ->where('slug->pl', $slug)
            ->firstOrFail();

            $cta = Cta::firstOrFail();

        return view('pages.apartment.show', compact('apartment','cta'));
    }

    public function attractions($apartmentSlug)
    {
        $apartment = Apartment::select('id', 'title', 'slug', 'logo', 'phone', 'mail', 'address','city', 'map_link')->where('slug->pl', $apartmentSlug)->firstOrFail();

        $attractions = LocalAttraction::orderBy('sort')->get();



        return view('pages.local-attractions.index', compact('attractions', 'apartment'));
    }

    public function contact($apartmentSlug)
    {
        $apartment = Apartment::with('socials')->select('id', 'title', 'slug', 'logo', 'phone', 'mail', 'address','city', 'map_link','banner_contact')->where('slug->pl', $apartmentSlug)->firstOrFail();



        return view('pages.contact.index', compact('apartment'));
    }

    public function gallery($apartmentSlug)
    {
        $apartment = Apartment::with('galleries', 'socials')->select('id', 'title', 'slug', 'logo', 'phone', 'mail', 'address','city', 'map_link', 'banner_gallery')->where('slug->pl', $apartmentSlug)->firstOrFail();



        return view('pages.gallery.index', compact('apartment'));
    }

    public function safety($apartmentSlug){
        $apartment = Apartment::select('id', 'title', 'slug', 'logo', 'phone', 'mail', 'address','city', 'map_link')->where('slug->pl', $apartmentSlug)->firstOrFail();

        return view('pages.safety.index', compact("apartment"));
    }
}

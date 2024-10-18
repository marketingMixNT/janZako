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
use Illuminate\Support\Facades\App;

class ApartmentController extends Controller
{
    public function index()
    {
        $home = Home::select('logo', 'phone', 'phone_second', 'mail', 'booking_link', 'bank', 'bank_account')
        ->addSelect(['id'])  // Dodaj 'id', aby relacje mogły się ładować
        ->with('socials')
        ->firstOrFail();

        $apartmentPage = HomeApartmentsPage::firstOrFail();

        $apartments = Apartment::orderBy('sort')->select('title', 'slug', 'thumbnail', 'address', 'city', 'booking_link', 'map_link', 'short_desc', 'phone', 'phone_second')->get();



        return view('pages.apartment.index', compact('apartments', 'apartmentPage', 'home'));
    }

    public function show($slug)
    {

        $locale = App::getLocale();

        $home = Home::select('phone', 'phone_second', 'mail',  'bank', 'bank_account')->firstOrFail();

        $apartment =
            Apartment::with('rooms', 'testimonials')
            ->select('id', 'title', 'slug', 'logo', 'phone', 'mail', 'address', 'city', 'map_link', 'map','slider_images', 'slider_heading', 'about_images', 'about_heading', 'about_text_first', 'about_text_second', 'rooms_heading', "rooms_text", 'booking_link', 'booking_script', 'google_reviews', 'google_reviews_link', 'google_reviews_average', 'tripadvisor_reviews', 'tripadvisor_reviews_link', 'tripadvisor_reviews_average',)

            ->where("slug->{$locale}", $slug)
            ->firstOrFail();

        $cta = Cta::firstOrFail();

        $apartments = Apartment::orderBy('sort', direction: 'asc')->select('title', 'address', 'city', 'phone', 'phone_second')->get();



        return view('pages.apartment.show', compact('apartment', 'cta', 'apartments', 'home'));
    }

    public function attractions($apartmentSlug)
    {

        $locale = App::getLocale();

        $home = Home::select('phone', 'phone_second', 'mail',  'bank', 'bank_account')->firstOrFail();


        $apartment = Apartment::select('id', 'title', 'slug', 'logo', 'phone', 'mail', 'address', 'city', 'map_link', 'booking_link')->where("slug->{$locale}", $apartmentSlug)->firstOrFail();

        $attractions = LocalAttraction::orderBy('sort')->get();

        $apartments = Apartment::orderBy('sort', direction: 'asc')->select('title', 'address', 'city', 'phone', 'phone_second')->get();



        return view('pages.local-attractions.index', compact('attractions', 'apartment', 'apartments','home'));
    }

    public function contact($apartmentSlug)
    {

        $locale = App::getLocale();

        $home = Home::select('phone', 'phone_second', 'mail',  'bank', 'bank_account')->firstOrFail();


        $apartment = Apartment::with('socials')->select('id', 'title', 'slug', 'logo', 'phone','phone_second', 'mail', 'address', 'city', 'map_link', 'banner_contact', 'booking_link','map')->where("slug->{$locale}", $apartmentSlug)->firstOrFail();

        $apartments = Apartment::orderBy('sort', direction: 'asc')->select('title', 'address', 'city', 'phone', 'phone_second')->get();



        return view('pages.contact.index', compact('apartment', 'apartments','home'));
    }

    public function gallery($apartmentSlug)
    {

        $locale = App::getLocale();

        $home = Home::select('phone', 'phone_second', 'mail',  'bank', 'bank_account')->firstOrFail();


        $apartment = Apartment::with('galleries', 'socials')->select('id', 'title', 'slug', 'logo', 'phone', 'mail', 'address', 'city', 'map_link', 'banner_gallery', 'booking_link')->where("slug->{$locale}", $apartmentSlug)->firstOrFail();

        $apartments = Apartment::orderBy('sort', direction: 'asc')->select('title', 'address', 'city', 'phone', 'phone_second')->get();


        return view('pages.gallery.index', compact('apartment', 'apartments','home'));
    }

    public function safety($apartmentSlug)
    {

        $locale = App::getLocale();

        $home = Home::select('phone', 'phone_second', 'mail',  'bank', 'bank_account')->firstOrFail();


        $apartment = Apartment::select('id', 'title', 'slug', 'logo', 'phone', 'mail', 'address', 'city', 'map_link', 'booking_link')->where("slug->{$locale}", $apartmentSlug)->firstOrFail();

        $apartments = Apartment::orderBy('sort', direction: 'asc')->select('title', 'address', 'city', 'phone', 'phone_second')->get();


        return view('pages.safety.index', compact("apartment", 'apartments','home'));
    }

    public function location($apartmentSlug)
    {

        $locale = App::getLocale();

        $home = Home::select('phone', 'phone_second', 'mail',  'bank', 'bank_account')->firstOrFail();


        $apartment = Apartment::select('id', 'title', 'slug', 'logo', 'phone', 'mail', 'address', 'city', 'map_link', 'booking_link','location_heading','location_text','location_info','banner_location','location_map','location_meta_title','location_meta_desc')->where("slug->{$locale}", $apartmentSlug)->firstOrFail();

        $apartments = Apartment::orderBy('sort', direction: 'asc')->select('title', 'address', 'city', 'phone', 'phone_second')->get();


        return view('pages.location.index', compact("apartment", 'apartments','home'));
    }

 
}

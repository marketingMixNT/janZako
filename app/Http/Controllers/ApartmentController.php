<?php

namespace App\Http\Controllers;

use App\Models\Slide;
use App\Models\Apartment;
use Illuminate\Http\Request;
use App\Models\TestimonialHome;

class ApartmentController extends Controller
{
    public function index()
    {
        $apartments = Apartment::orderBy('sort')->select('title', 'slug', 'thumbnail',)->get();

        return view('pages.apartment.index', compact('apartments'));
    }

    public function show($slug)
    {
        $apartment = Apartment::with('rooms','testimonials',)->where('slug->pl', $slug)->firstOrFail();

        // $slides = Slide::orderBy('sort')->get();
        // $apartments = Apartment::orderBy('sort')->select('title', 'slug', 'thumbnail',)->get();
        // $testimonials = TestimonialHome::orderBy("sort")->get();



        // return view('pages.home.index', compact("slides", "apartments", 'testimonials'));

        return view('pages.apartment.show', compact('apartment', ));
    }
}

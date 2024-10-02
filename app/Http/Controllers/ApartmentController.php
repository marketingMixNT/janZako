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
        $apartments = Apartment::orderBy('sort')->select('title', 'slug', 'thumbnail','address',)->get();

        return view('pages.apartment.index', compact('apartments'));
    }

    public function show($slug)
    {
        $apartment = Apartment::with('rooms', 'testimonials',)->where('slug->pl', $slug)->firstOrFail();

        return view('pages.apartment.show', compact('apartment',));
    }
}

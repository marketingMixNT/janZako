<?php

namespace App\Http\Controllers;

use App\Models\Slide;
use App\Models\Apartment;
use App\Models\TestimonialHome;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    /**
     * Handle the incoming request.
     */
    public function __invoke(Request $request)
    {

        $slides = Slide::orderBy('sort')->get();
        $apartments = Apartment::orderBy('sort')->select('title', 'slug', 'thumbnail',)->get();
        $testimonials = TestimonialHome::orderBy("sort")->get();



        return view('pages.home.index', compact("slides", "apartments", 'testimonials'));
    }
}

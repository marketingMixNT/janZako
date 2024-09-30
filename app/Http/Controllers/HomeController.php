<?php

namespace App\Http\Controllers;

use App\Models\Slide;
use App\Models\Apartment;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    /**
     * Handle the incoming request.
     */
    public function __invoke(Request $request)
    {

        $slides = Slide::where('home_slider', true)->get();
        $apartments = Apartment::orderBy('sort')->select('title','slug','thumbnail',)->get();

    

        return view('pages.home.index',compact("slides","apartments"));
    }
}

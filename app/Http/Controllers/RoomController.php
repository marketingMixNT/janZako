<?php

namespace App\Http\Controllers;

use App\Models\Cta;
use App\Models\Home;
use App\Models\Room;
use App\Models\Apartment;
use Illuminate\Support\Facades\App;


class RoomController extends Controller
{

    public function index($apartmentSlug)
    {

        $locale = App::getLocale();

        $home = Home::select('phone', 'phone_second', 'mail',  'bank', 'bank_account')->firstOrFail();
        $apartments = Apartment::orderBy('sort', direction: 'asc')->select('title', 'address', 'city', 'phone', 'phone_second')->get();

        $apartment = Apartment::select('id', 'title', 'slug', 'logo', 'phone', 'mail', 'address', 'city', 'map_link', 'booking_link', 'banner_rooms')->where("slug->{$locale}", $apartmentSlug)->firstOrFail();



        $rooms = Room::select('id', 'title', 'thumbnail', 'short_desc', 'slug', 'beds', 'bathroom')->where('apartment_id', $apartment->id)->get();

        return view('pages.room.index', compact('apartment', 'rooms','home','apartments'));
    }

    public function show($apartmentSlug, $roomSlug)
    {

        $locale = App::getLocale();

        $home = Home::select('phone', 'phone_second', 'mail',  'bank', 'bank_account')->firstOrFail();
        $apartments = Apartment::orderBy('sort', direction: 'asc')->select('title', 'address', 'city', 'phone', 'phone_second')->get();

        $apartment = Apartment::select('id', 'title', 'slug', 'logo', 'phone', 'mail', 'address', 'city', 'map_link')
            ->where("slug->{$locale}", $apartmentSlug) 
            ->firstOrFail();



        $cta = Cta::firstOrFail();

        $room = Room::where('apartment_id', $apartment->id)
            ->where("slug->{$locale}", $roomSlug)
            ->firstOrFail();


        $otherRooms = Room::select('title', 'slug', 'thumbnail', 'beds', 'bathroom')
            ->where('apartment_id', $apartment->id)
            ->where('id', '!=', $room->id)
            ->orderBy('sort')
            ->take(3)
            ->get();

        return view('pages.room.show', compact('apartment', 'room', 'otherRooms', 'cta','home','apartments'));
    }
}

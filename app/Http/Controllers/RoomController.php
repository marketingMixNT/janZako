<?php

namespace App\Http\Controllers;

use App\Models\Apartment;
use App\Models\Cta;
use App\Models\Room;

class RoomController extends Controller
{

    public function index($apartmentSlug)
    {

        $apartment = Apartment::select('id', 'title', 'slug', 'logo', 'phone', 'mail', 'address', 'city', 'map_link', 'booking_link', 'banner_rooms')->where('slug->pl', $apartmentSlug)->firstOrFail();



        $rooms = Room::select('id', 'title', 'thumbnail', 'short_desc', 'slug', 'beds', 'bathroom')->where('apartment_id', $apartment->id)->get();

        return view('pages.room.index', compact('apartment', 'rooms'));
    }

    public function show($apartmentSlug, $roomSlug)
    {
        $apartment = Apartment::select('id', 'title', 'slug', 'logo', 'phone', 'mail', 'address', 'city', 'map_link')
            ->where('slug->pl', $apartmentSlug)
            ->firstOrFail();

        $cta = Cta::firstOrFail();

        $room = Room::where('apartment_id', $apartment->id)
            ->where('slug->pl', $roomSlug)
            ->firstOrFail();


        $otherRooms = Room::select('title', 'slug', 'thumbnail','beds','bathroom')
            ->where('apartment_id', $apartment->id)
            ->where('id', '!=', $room->id)
            ->orderBy('sort')
            ->take(3)
            ->get();

        return view('pages.room.show', compact('apartment', 'room', 'otherRooms', 'cta'));
    }
}

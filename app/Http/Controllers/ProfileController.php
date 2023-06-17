<?php

namespace App\Http\Controllers;

use App\Models\Listing;
use App\Models\Place;

class ProfileController extends Controller
{
    // get user's listings
    public function index() {
        $place = Place::getUsersPlace();

        return view('profile.index', [
            'listings' => Listing::all()->where('user_id', auth()->id()),
            'place' => $place
        ]);
    }

    public function create() {
        $place = Place::all()
            ->where('user_id', auth()->id())
            ->first();

        if ($place == null) {
            return redirect('/profile/place')
                ->with('message', 'Перед тим як додавати товари, будь ласка, додайте торгову точку');
        }

        return view('profile.create');
    }

    public function edit(Listing $listing) {
        return view('profile.edit', [
            'listing' => $listing
        ]);
    }
}

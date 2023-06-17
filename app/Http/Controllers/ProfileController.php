<?php

namespace App\Http\Controllers;

use App\Models\Listing;

class ProfileController extends Controller
{
    // get user's listings
    public function index() {
        return view('profile.index', [
            'listings' => Listing::all()->where('user_id', '1')
          ]);
    }

    public function create() {
        return view('profile.create');
    }

    public function edit(Listing $listing) {
        return view('profile.edit', [
            'listing' => $listing
        ]);
    }
}

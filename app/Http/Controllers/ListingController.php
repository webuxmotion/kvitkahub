<?php

namespace App\Http\Controllers;

use App\Models\Listing;

class ListingController extends Controller
{
    // get n-count listings
    public function index() {
        return view('listings.index', [
            'listings' => Listing::all()->take(6)
          ]);
    }
}

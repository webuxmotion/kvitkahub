<?php

namespace App\Http\Controllers;

use App\Models\Listing;
use App\Models\Order;
use Illuminate\Http\Request;

class ListingController extends Controller
{
    // get n-count listings
    public function index() {
        return view('listings.index', [
            'listings' => Listing::all()->take(6)
          ]);
    }

    // get single listing
    public function show(Listing $listing) {
        return view('listings.show', [
            'listing' => $listing
          ]);
    }

    public function store(Request $request) {
        $formFields = $request->validate([
            'name' => 'required',
            'contact' => 'required',
            'listing_id' => 'required',
            'user_id' => 'required',
            'price' => 'required',
        ]);

        if ($request->image) {
            $formFields['image'] = $request->image;
        }

        Order::create($formFields);

        return back()
            ->with(
                'message', 
                'Вітаємо!  Ваша заявка відправлена продавцю на Телеграм.'
            )
            ->with(
                'message-secondary', 
                'Після обробки продавець напише вам щодо вашого замовлення.'
            );
    }
}

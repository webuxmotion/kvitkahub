<?php

namespace App\Http\Controllers;

use App\Models\Listing;
use App\Models\Order;
use App\Models\Place;
use Illuminate\Http\Request;
use Image;

class ListingController extends Controller
{
    // get n-count listings
    public function index() {
        return view('listings.index', [
            'listings' => Listing::getItems()->take(3)
        ]);
    }

    public function addPoint() {
        return view('listings.add-point');
    }

    public function all() {
        $placeId = request('place');
        $place = null;
        $listing = null;

        if ($placeId != null) {
            $place = Place::find($placeId);

            if ($place != null) {
                $listing = Listing::getItems()
                    ->where('user_id', $place->user_id);
            } else {
                $listing = Listing::getItems();
            }
        } else {
            $listing = Listing::getItems();
        }


        return view('listings.all', [
            'listings' => $listing,
            'place' => $place
          ]);
    }

    public function show(Listing $listing) {
        $place = Place::all()
            ->where('user_id', $listing->user_id)
            ->first();

        return view('listings.show', [
            'listing' => $listing,
            'place' => $place
        ]);
    }

    public function storeOrder(Request $request) {
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

    public function store(Request $request) {
        $formFields = $request->validate([
            'name' => 'required',
            'price' => 'required'
        ]);

        if ($request->hasFile('image')) {
            $storedImage = $this->storeImage($request, 'image', 'products');
            $formFields['image'] = $storedImage;
        }

        $formFields['user_id'] = auth()->id() ?? 1;

        Listing::create($formFields);

        return redirect('/profile/flowers')
            ->with('message', 'Товар успішно додано!');
    }

    public function update(Request $request, Listing $listing) {

        $validateFields = [
            'name' => 'required',
            'price' => 'required'
        ];

        $formFields = $request->validate($validateFields);

        if ($request->hasFile('image')) {
            $storedImage = $this->storeImage($request, 'image', 'products');
            
            $formFields['image'] = $storedImage;
        }

        $listing->update($formFields);

        return redirect('/profile')
            ->with('message', 'Товар оновлено!');
    }

    public function destroy(Listing $listing) {
        $listing->delete();

        return redirect('/profile')
            ->with('message', 'Товар видалено!');
    }
}

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
            $formFields['image'] = $request->file('image')->store('products', 'public');
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
            $formFields['image'] = $request->file('image')->store('products', 'public');
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

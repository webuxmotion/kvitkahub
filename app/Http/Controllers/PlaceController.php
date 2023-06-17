<?php

namespace App\Http\Controllers;

use App\Models\Place;
use Illuminate\Http\Request;

class PlaceController extends Controller
{
    public function index() {
        return view('places.index', [
            'places' => Place::all()
                ->where('confirmed', 1)
          ]);
    }

    public function edit() {
        $place = Place::getUsersPlace();

        if ($place == null) {
            return view('places.create');
        }
        
        return view('places.edit', [
            'place' => $place
        ]);
    }

    public function store(Request $request, Place $place) {

        $validateFields = [
            'name' => 'required',
            'phone' => 'required',
            'contact_name' => 'required',
            'address' => 'required',
            'map_link' => 'required',
        ];

        $formFields = $request->validate($validateFields);

        if ($request->hasFile('map_image')) {
            $formFields['map_image'] = $request->file('map_image')->store('places', 'public');
        }

        $formFields['user_id'] = auth()->id() ?? 1;

        $place->create($formFields);

        return redirect('/profile/place')
            ->with('message', 'Точку додано!');
    }
    
    public function update(Request $request, Place $place) {

        $validateFields = [
            'name' => 'required',
            'phone' => 'required',
            'contact_name' => 'required',
            'address' => 'required',
            'map_link' => 'required',
        ];

        $formFields = $request->validate($validateFields);

        if ($request->hasFile('map_image')) {
            $formFields['map_image'] = $request->file('map_image')->store('places', 'public');
        }

        $place->update($formFields);

        return redirect('/profile/place')
            ->with('message', 'Точку оновлено!');
    }
}

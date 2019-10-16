<?php

namespace App\Http\Controllers;

use App\Property;

use Illuminate\Http\Request;

class PropertyController extends Controller
{
    public function index() {

        return view('properties.index')->with('properties', Property::all());

    }

    public function show($propertyId) {

        return view('properties.show')->with('property', Property::find($propertyId));
    }

    public function create() {
        return view('properties.create');
    }

    public function store() {

        $this->validate(request(), [
            'property_name' => 'required|min:6|max:12',
            'address' => 'required',
            'city' => 'required',
            'state' => 'required',
            'zipcode' => 'required',
            'comments' => 'required'
        ]);
        $data = request()->all();

        $property = new Property();
        $property->property_name = $data['property_name'];
        $property->address = $data['address'];
        $property->city = $data['city'];
        $property->state = $data['state'];
        $property->zipcode = $data['zipcode'];
        $property->completed = false;
        $property->comments = $data['comments'];

        $property->save();

        return redirect('/properties');


    }
}

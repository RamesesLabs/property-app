<?php

namespace App\Http\Controllers;

use App\Property;

use Illuminate\Http\Request;

class PropertyController extends Controller
{
    public function index() {

        return view('properties.index')->with('properties', Property::all());

    }

    public function show(Property $property) {

        return view('properties.show')->with('property', $property);
    }

    public function create() {
        return view('properties.create');
    }

    public function store() {

        $this->validate(request(), [
            'property_name' => 'required|min:6|max:50',
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

        session()->flash('success', 'Property created successfully.');

        return redirect('/properties');
    }

    public function edit(Property $property) {

        return view('properties.edit')->with('property', $property);
    }

    // TODO: Fix Update Validation Rules to use non-updated fields current information.

    public function update(Property $property) {
        $this->validate(request(), [
            'property_name' => 'required|min:6|max:50',
            'completed' => 'required',
            'comments' => 'required'
        ]);

        $data = request()->all();

        $property->property_name = $data['property_name'];
        $property->address = $data['address'];
        $property->city = $data['city'];
        $property->state = $data['state'];
        $property->zipcode = $data['zipcode'];
        $property->completed = $data['completed'];
        $property->comments = $data['comments'];

        $property->save();

        session()->flash('success', 'Property edited successfully.');

        return redirect('/properties');

    }

    public function destroy(Property $property)
    {
      $property->delete();

      session()->flash('success', 'Property deleted successfully.');

      return redirect('/properties');
    }

    public function complete(Property $property)
    {
      $property->completed = true;
      $property->save();
      session()->flash('success', 'Property completed successfully.');
      return redirect('/properties');
    }
}

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
}

<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\property;


class PropertyController extends Controller
{
    public function index()
    {

        //     $user = auth()->user(); // Assuming you're using Laravel's authentication system

        // if ($user) {
        //     // Retrieve properties for the authenticated user
        //     $properties = Property::where('user_id', $user->id)->get();
        //     return view('property.listings', compact('properties'));
        // }




         $properties = property::all();
         return view('property.listings', compact('properties'));
    }

    public function create()
    {
        return view('property.post');
    }

    public function store(Request $request)
    {
        $data = $request->validate([
            'property_name' => 'required',
            'property_adress' => 'required',
            'price' => 'required|decimal:0,2',
            'bedrooms' => 'required|numeric',
            'bathrooms' => 'required|numeric',
            'size' => 'required|numeric',
            'description' => 'required',
            'image' => 'required',
        ]);

        if ($request->has('image')) {
            $file = $request->file('image');
            $extention = $file->getClientOriginalExtension();

            $filename = time() . '.' . $extention;

            $path = 'uploads/property/';
            $file->move($path, $filename);
        }



        property::create([
            'property_name' => $request->property_name,
            'property_adress' => $request->property_adress,
            'price' => $request->price,
            'bedrooms' => $request->bedrooms,
            'bathrooms' => $request->bathrooms,
            'size' => $request->size,
            'description' => $request->description,
            'image' => $path . $filename,
        ]);

        return redirect(route('property.index'));
    }

    public function edit(property $property)
    {
        return view('property.edit', compact('property'));
    }
    public function update(property $property, Request $request)
    {
        $request->validate([
            'property_name' => 'required',
            'property_adress' => 'required',
            'price' => 'required|decimal:0,2',
            'bedrooms' => 'required|numeric',
            'bathrooms' => 'required|numeric',
            'size' => 'required|numeric',
            'description' => 'required',
            'image' => 'required',
        ]);

        if ($request->has('image')) {
            $file = $request->file('image');
            $extention = $file->getClientOriginalExtension();

            $filename = time() . '.' . $extention;

            $path = 'uploads/property/';
            $file->move($path, $filename);
        }

        $property->update([
            'property_name' => $request->property_name,
            'property_adress' => $request->property_adress,
            'price' => $request->price,
            'bedrooms' => $request->bedrooms,
            'bathrooms' => $request->bathrooms,
            'size' => $request->size,
            'description' => $request->description,
            'image' => $path . $filename,
        ]);

        return redirect(route('property.index'));
    }

    public function delete(property $property)
    {
        $property->delete();
        return redirect(route('property.index'));
    }


}

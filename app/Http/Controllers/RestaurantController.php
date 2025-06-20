<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Restaurant;
use Illuminate\Support\Facades\Hash;

class RestaurantController extends Controller
{
    public function store(Request $request)
    {
        $validated = $request->validate([
            'name' => 'required|string|max:255',
            'address' => 'required|string|max:255',
            'phone' => 'required|string|max:20',
            'email' => 'required|email|unique:restaurants,email',
            'description' => 'required|string',
            'number_tables' => 'required|integer|min:1',
            'password' => 'required|string|min:6',
        ]);

        $validated['password'] = Hash::make($validated['password']);

        Restaurant::create($validated);

        return back()->with('success', 'Restaurante registrado exitosamente.');
    }

    public function disponibles()
    {
        $restaurants = Restaurant::all();
        return view('restaurants_list', compact('restaurants'));
    }
}

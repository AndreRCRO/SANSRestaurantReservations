<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Restaurant;

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
        ]);

        Restaurant::create($validated);

        return back()->with('success', 'Restaurante registrado exitosamente.');
    }
}

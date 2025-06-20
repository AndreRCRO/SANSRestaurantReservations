<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Restaurant;
use Illuminate\Support\Facades\Hash;
use App\Models\Reservation;

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
        $validated['free_tables'] = $validated['number_tables']; // <--- Aquí igualas

        Restaurant::create($validated);

        return redirect('/')->with('success', 'Restaurante registrado exitosamente.');
    }

    public function disponibles()
    {
        $restaurants = Restaurant::all();
        return view('restaurants_list', compact('restaurants'));
    }


    public function reservarMesa(Request $request)
    {
        $validated = $request->validate([
            'restaurant_name' => 'required|string',
            'email' => 'required|email',
            'tables' => 'required|integer|min:1',
            'date' => 'required|date',
            'time' => 'required',
        ]);

        $restaurant = Restaurant::where('name', $validated['restaurant_name'])->first();

        if (!$restaurant) {
            return back()->with('error', 'Restaurante no encontrado.');
        }

        // Verifica si hay suficientes mesas libres
        if ($restaurant->free_tables < $validated['tables']) {
            return back()->with('error', 'No hay suficientes mesas libres.');
        }

        // Actualiza las mesas libres y reservadas
        $restaurant->free_tables -= $validated['tables'];
        $restaurant->reservations_count += $validated['tables'];
        $restaurant->save();

        Reservation::create([
            'restaurant_id' => $restaurant->id,
            'customer_name' => $request->input('customer_name'), // si lo pides en el formulario
            'email' => $validated['email'],
            'tables' => $validated['tables'],
            'date' => $validated['date'],
            'time' => $validated['time'],
        ]);

        return back()->with('success', '¡Reserva realizada con éxito!');
    }
}

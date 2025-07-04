<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Restaurant;

class RestaurantPanelController extends Controller
{
    public function adminPanel(Request $request)
    {
        // Verifica si el restaurante está autenticado
        if (!$request->session()->has('restaurant_id')) {
            return redirect()->route('login.restaurant.form');
        }

        // Obtén el restaurante autenticado con sus reservas
        $restaurant = Restaurant::with('reservations')->find($request->session()->get('restaurant_id'));

        // Pasa el restaurante (con reservas) a la vista
        return view('admin_panel', compact('restaurant'));
    }
}
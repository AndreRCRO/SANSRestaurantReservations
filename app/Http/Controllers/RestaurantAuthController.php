<?php
namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Restaurant;
use Illuminate\Support\Facades\Hash;

class RestaurantAuthController extends Controller
{
    public function showLoginForm()
    {
        return view('restaurant_login');
    }

    public function login(Request $request)
    {
        $credentials = $request->validate([
            'email' => 'required|email',
            'password' => 'required|string',
        ]);

        $restaurant = Restaurant::where('email', $credentials['email'])->first();

        if ($restaurant && Hash::check($credentials['password'], $restaurant->password)) {
            // Guardar el ID del restaurante en la sesión
            $request->session()->put('restaurant_id', $restaurant->id);
            return redirect()->route('admin.panel');
        }

        return back()->with('error', 'Credenciales incorrectas.');
    }

    public function logout(Request $request)
    {
        $request->session()->forget('restaurant_id');
        return redirect()->route('login.restaurant.form');
    }
}
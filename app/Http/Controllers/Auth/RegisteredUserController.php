<?php

namespace App\Http\Controllers\Auth;

use App\Providers\RouteServiceProvider;
use App\Http\Controllers\Controller;
use App\Models\User;
use Illuminate\Auth\Events\Registered;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Validation\Rules;
use Illuminate\View\View;

class RegisteredUserController extends Controller
{
    /**
     * Display the registration view.
     */
    public function create(): View
    {
        return view('auth.register');
    }

    /**
     * Handle an incoming registration request.
     *
     * @throws \Illuminate\Validation\ValidationException
     */
    public function store(Request $request): RedirectResponse
    {
        
        $user = User::create([
    'nombres' => $request->name, // Ajustado a "nombres"
    'apellidos' => $request->apellido, // Asegúrate de recibirlo en el formulario
    'name' => $request->name, // Este campo también existe en la BD
    'email' => $request->email,
    'password' => Hash::make($request->password), // Ajustado a "password"
]);


    Auth::login($user);

    return redirect(RouteServiceProvider::HOME); // Redirige a /productos
}
}
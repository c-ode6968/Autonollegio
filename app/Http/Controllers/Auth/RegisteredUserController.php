<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Models\User;
use App\Providers\RouteServiceProvider;
use Illuminate\Auth\Events\Registered;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Validation\Rules;

class RegisteredUserController extends Controller
{
    /**
     * Display the registration view.
     *
     * @return \Illuminate\View\View
     */
    public function create()
    {
        return view('auth.register');
    }

    /**
     * Handle an incoming registration request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\RedirectResponse
     *
     * @throws \Illuminate\Validation\ValidationException
     */
    public function store(Request $request)
    {
        $request->validate([
            'name' => ['required', 'string', 'max:255'],
            'cognome' => ['required', 'string', 'max:255'],
            'username' => ['required', 'string', 'min:8', 'unique:users'],
            'data_di_nascita' => ['required', 'string', 'max:10'],
            'residenza' => ['required', 'string', 'max:50'],
            'occupazione' => ['required', 'string'], 
            'password' => ['required', 'confirmed', Rules\Password::defaults()],
        ]);

        $user = User::create([
            'name' => $request->name,
            'cognome'=>$request->cognome,
            'username' => $request->username,
            'data_di_nascita' => $request->data_di_nascita,
            'residenza' => $request->residenza,
            'occupazione' => $request->occupazione,
            'password' => Hash::make($request->password),
            
        ]);

        event(new Registered($user));

        Auth::login($user);

        return redirect(RouteServiceProvider::HOME);
    }
}

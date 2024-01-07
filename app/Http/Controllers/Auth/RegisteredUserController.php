<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Models\Notification;
use App\Models\User;
use App\Providers\RouteServiceProvider;
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
        $request->validate([

            'name' => ['required', 'string', 'max:255'],
            'email' => ['required', 'string', 'lowercase', 'email', 'max:255', 'unique:'.User::class],
            'telephone' => ['required', 'string', 'max:255'],
            'localisation' => ['required', 'string', 'max:255'],
            'birthdate' => ['required', 'date', 'max:255'],
            'gender' => ['required', 'string', 'max:255'],
            'status' => ['required', 'string', 'max:255'],
            'password' => ['required', 'confirmed', Rules\Password::defaults()],
        ]);

        $user = User::create([

            'name' => $request->name,
            'email' => $request->email,
            'phoneNumber' => $request->telephone,
            'address' => $request->localisation,
            'birth_year' => $request->birthdate,
            'gender' => $request->gender,
            'status' => $request->status,
            'password' => Hash::make($request->password),
        ]);

        $notification = Notification::create([

            'user_id' => $user->id,
            'title' => "Bienvenue Sur H-Event",
            'content' => "Nous vous réservons de très bonne suporise. Cliquez pour découvrir",
            'referTo' => '/events',
            
        ]);

        event(new Registered($user));

        Auth::login($user);

        return redirect(RouteServiceProvider::HOME);
    }
}

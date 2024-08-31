<?php

namespace App\Http\Controllers\Business_user\Auth;


use App\Http\Controllers\Controller;
use App\Models\Business_user;
// use App\Models\User;
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
        return view('business_user.auth.register');
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
            'email' => ['required', 'string', 'lowercase', 'email', 'max:255', 'unique:'.Business_user::class],
            'password' => ['required', 'confirmed', Rules\Password::defaults()],
        ]);

        $business_user = Business_user::create([
            'name' => $request->name,
            'email' => $request->email,
            'password' => Hash::make($request->password),
        ]);

        event(new Registered($business_user));

        Auth::guard('business_user')->login($business_user);


        // dd($admin);
        return redirect(route('business-user.dashboard', absolute: false));
    }
}

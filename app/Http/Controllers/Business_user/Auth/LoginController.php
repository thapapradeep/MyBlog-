<?php

namespace App\Http\Controllers\Business_user\Auth;

use App\Http\Controllers\Controller;
use App\Http\Requests\Auth\Business_userLoginRequest;
// use App\Http\Requests\Auth\LoginRequest;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\View\View;

class LoginController extends Controller
{
    /**
     * Display the login view.
     */
    public function create(): View
    {
        return view('business_user.auth.login');
    }

    /**
     * Handle an incoming authentication request.
     */
    public function store(Business_userLoginRequest $request): RedirectResponse
    {
        $request->authenticate();

        $request->session()->regenerate();

        return redirect()->intended(route('business_user.dashboard', absolute: false));
    }

    /**
     * Destroy an authenticated session.
     */
    public function destroy(Request $request): RedirectResponse
    {
        Auth::guard('business_user')->logout();

        $request->session()->invalidate();

        $request->session()->regenerateToken();

        return redirect('/business_user/login');
    }
}

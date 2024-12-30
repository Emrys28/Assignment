<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Validation\ValidationException;

class AuthController extends Controller
{
    // Show Registration Form
    // Handle Registration
    public function register(Request $request)
    {
        $request->validate([
            'first_name' => 'required|string|max:255',
            'last_name' => 'required|string|max:255',
            'email' => 'required|string|email|max:255|unique:users',
            'password' => 'required|string|min:8|confirmed',
        ]);

        $fullName = "{$request->first_name} {$request->last_name}";

        User::create([
            'name' => $fullName,
            'email' => $request->email,
            'password' => Hash::make($request->password),
        ]);

        return redirect()->route('login')->with('success', 'Registration successful. Please login.');
    }

    // Show Login Form
    public function showLoginForm()
    {
        return view('auth.login');
    }

    // Handle Login
    public function login(Request $request)
{
    $request->validate([
        'email' => 'required|email',
        'password' => 'required',
    ]);

    // Check if user is locked out
    if (session('lockout_time') && now()->lessThan(session('lockout_time'))) {
        $secondsLeft = now()->diffInSeconds(session('lockout_time'));
        return back()->withErrors(['email' => "Too many login attempts. Please try again in {$secondsLeft} seconds."]);
    }

    // Reset lockout after success or timeout
    if (now()->greaterThan(session('lockout_time', now()))) {
        session()->forget(['login_attempts', 'lockout_time']);
    }

    if (Auth::attempt($request->only('email', 'password'))) {
        $request->session()->regenerate();
        session()->forget(['login_attempts', 'lockout_time']); // Clear failed attempts
        return redirect()->intended('/');
    }

    // Throttle login attempts
    if (session()->has('login_attempts')) {
        $attempts = session('login_attempts') + 1;
        session(['login_attempts' => $attempts]);

        if ($attempts >= 3) {
            session(['lockout_time' => now()->addMinutes(3)]);
            return back()->withErrors(['email' => 'Too many login attempts. Please try again in 3 minutes.']);
        }
    } else {
        session(['login_attempts' => 1]);
    }

    return back()->withErrors(['email' => 'Invalid credentials.']);
}


    // Handle Logout
    public function logout(Request $request)
    {
        Auth::logout();
        $request->session()->invalidate();
        $request->session()->regenerateToken();
        return redirect('/');
    }
}


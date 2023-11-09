<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class LoginController extends Controller
{
    public function index() {
        return view('login.index', [
            "title" => "Login",
            "active" => "login"
        ]);
    }

    public function authenticate(Request $request) {
        $credentials = $request->validate([
            'email' => 'required|email:dns',
            'password' => 'required'
        ]);

        if (auth()->attempt($credentials)) {
            $request->session()->regenerate();

            return redirect()->intended('/dashboard')->with('success', 'Login successfull!');
        }

        return back()->with('loginError', 'Login failed!');
    }

    public function logout() {
        auth()->logout();

        session()->invalidate();
        session()->regenerateToken();

        return redirect('/')->with('success', 'Logout successfull!');
    }
}

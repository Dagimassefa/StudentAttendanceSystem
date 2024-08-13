<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Redirect;
class AuthController extends Controller
{
        public function showLoginForm()
    {
        return view('login');
    }
     public function login(Request $request)
    {
        $request->validate([
            'email' => 'required|email',
            'password' => 'required',
        ]);

        $credentials = $request->only('email', 'password');

        if (Auth::attempt($credentials)) {
      
           return Redirect::route('dashboard');
        }

        return Redirect::back()->withErrors(['error' => 'Invalid credentials']);
    }
     public function logout()
    {
        Auth::logout();
        return Redirect::route('login')->with('status', 'You have been logged out.');
    }
}

<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;

class AuthController extends Controller
{
    public function loginView()
    {
        return view('login.index',[
            'title' => 'Login',
        ]);
    }
    public function login(Request $request)
    {
        $credentials = $request->validate([
            'email' => 'required|email:dns',
            'password' => 'required'
        ]);

        if (Auth::attempt($credentials, $request->remember)) {
            $request->session()->regenerate();
            return redirect()->intended('admin/dashboard/{id}')->with('success', 'Login successful!');
        }

        return back()->with('error', 'Invalid credentials. Please try again.');
    }

    public function logout(Request $request)
    {
        Auth::logout();
        $request->session()->invalidate();
        $request->session()->regenerateToken();
        return redirect('/home');
    }

    public function registerView()
    {
        return view('register.index',[
            'title' => 'Register',
        ]);
    }

    public function register(Request $request)
    {
        $validator = $request->validate([
            'name' => 'required|string',
            'email' => 'required|email|unique:users',
            'password' => 'required|string|min:8',
        ]);

        $validator['password'] = Hash::make($validator['password']);
        User::create($validator);

        return redirect('/admin/dashboard')->with('success', 'Register Success!');
    }
}

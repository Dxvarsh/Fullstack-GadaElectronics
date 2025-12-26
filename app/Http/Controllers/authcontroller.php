<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Auth;
use App\Models\User;
use Illuminate\Support\Facades\Hash;

class AuthController extends Controller
{
    public function home() 
    {
        return view('home');
    }

    public function product()
    {
        return view('product');
    }

    public function showLogin()
    {
        return view('login', ['action' => 'login']); 
    }
    
    public function showRegister()
    {
        return view('login', ['action' => 'register']);
    }

    // Login Handle
    public function form_data(Request $request)
    {
        // Validate inputs
        $credentials = $request->validate([
            'login_email' => 'required|email',
            'login_password' => 'required'
        ]);

        if (Auth::attempt(['email' => $request->login_email, 'password' => $request->login_password], $request->has('remember'))) {
            $request->session()->regenerate();
            return redirect()->route('home')->with('success', 'Logged in successfully!');
        }

        return back()->withErrors([
            'login_email' => 'The provided credentials do not match our records.',
        ])->onlyInput('login_email');
    }

    // Register Handle
    public function form(Request $request)
    {
        $request->validate([
            'reg_name' => 'required|string|max:255',
            'reg_email' => 'required|string|email|max:255|unique:users,email',
            'reg_phone' => 'required|string|max:20',
            'reg_password' => 'required|string|min:8|same:reg_confirm_password',
        ]);

        $user = User::create([
            'name' => $request->reg_name,
            'email' => $request->reg_email,
            'phone' => $request->reg_phone,
            'password' => Hash::make($request->reg_password),
        ]);

        Auth::login($user);

        return redirect()->route('home')->with('success', 'Registration successful!');
    }

    public function logout(Request $request)
    {
        Auth::logout();
        $request->session()->invalidate();
        $request->session()->regenerateToken();
        return redirect('/');
    }

    public function contactform(Request $request)
    {
        $validated = $request->validate([
            'fname' => 'required|string',
            'lname' => 'required|string',
            'email' => 'required|email',
            'phone' => 'required|numeric',
            'service' => 'required|string',
            'message' => 'required|string',
        ]);

        DB::table('contacts')->insert([
            'fname' => $validated['fname'],
            'lname' => $validated['lname'],
            'email' => $validated['email'],
            'phone' => $validated['phone'],
            'service'=> $validated['service'],
            'message' => $validated['message'],
            'created_at' => now(),
            'updated_at' => now(),
        ]);

        return redirect()->route('home')->with('success', 'Message sent successfully!');
    }
}

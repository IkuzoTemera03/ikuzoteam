<?php

namespace App\Http\Controllers;

use App\Models\User;
use App\Models\tiketSampah;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class SessionContrroller extends Controller
{
    public function root()
    {
        $tickets = tiketSampah::take(24)->orderBy('updated_at', 'desc')->get();

        return view('home', [
            'page' => '',
            'tickets' => $tickets
        ]);
    }

    public function login(Request $request)
    {
        $credentials = $request->validate([
            'email' => 'required|email',
            'password' => 'required',
        ]);

        if (
            Auth::attempt([
                'email' => $credentials['email'],
                'password' => $credentials['password']
            ])
        ) {
            $request->session()->regenerate();
            return redirect()->intended('/home')->with('success', 'Welcome ' . Auth::user()->name);
        }

        return back()->with('error', 'Login Failed!');
    }

    public function register(Request $request)
    {
        $credentials = $request->validate([
            'name' => 'required',
            'email' => 'required|email',
            'password' => 'required',
        ]);

        User::create($credentials);

        return redirect('login')->with('success', 'Akun Berhasil dibuat, silahkan login!');
    }

    public function logout(Request $request)
    {
        Auth::logout();

        $request->session()->invalidate();
        $request->session()->regenerateToken();

        return redirect('/');
    }
}

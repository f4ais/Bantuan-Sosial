<?php

namespace App\Http\Controllers;

use App\Http\Requests\LoginRequest;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class AuthController extends Controller
{
    /**
     * Menampilkan halaman login
     */
    public function showLogin()
    {
        return view('auth.login');
    }

    /**
     * Proses login
     */
    public function login(LoginRequest $request)
    {
        $credentials = $request->only('email', 'password');

        if (Auth::attempt($credentials)) {

            $request->session()->regenerate();

            switch (Auth::user()->role) {

                case 'admin':
                    return redirect()->route('admin.dashboard');

                case 'rt':
                    return redirect()->route('rt.dashboard');

                case 'surveyor':
                    return redirect()->route('surveyor.dashboard');

                case 'penyalur':
                    return redirect()->route('penyalur.dashboard');

                default:
                    Auth::logout();
                    return redirect()->route('login')
                        ->withErrors([
                            'email' => 'Role tidak dikenali.',
                        ]);
            }
        }

        return back()
            ->withErrors([
                'email' => 'Email atau password salah.',
            ])
            ->onlyInput('email');
    }

    /**
     * Logout
     */
    public function logout(Request $request)
    {
        Auth::logout();

        $request->session()->invalidate();

        $request->session()->regenerateToken();

        return redirect()->route('login');
    }
}
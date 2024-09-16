<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;

class MedicoAuthController extends Controller
{
    public function showLoginForm()
    {
        return view('auth.medico-login');
    }

    public function login(Request $request)
    {
        $credentials = $request->only('email', 'password');

        if (Auth::guard('medico')->attempt($credentials)) {
            return redirect()->route('medico.dashboard');
        }

        return back()->withErrors([
            'email' => 'Credenciais incorretas.',
        ]);
    }

    public function logout()
    {
        Auth::guard('medico')->logout();
        return redirect()->route('medico.login');
    }
}

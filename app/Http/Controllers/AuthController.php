<?php
// app/Http/Controllers/AuthController.php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\Member;
use Illuminate\Support\Facades\Hash;

class AuthController extends Controller
{
    public function showLoginForm()
    {
        return view('auth.login');
    }

    public function login(Request $request)
    {
        $request->validate([
            'nim' => 'required',
            'password' => 'required',
        ]);

        $member = Member::where('nim', $request->nim)->first();

        if ($member && Hash::check($request->password, $member->password)) {
            Auth::login($member);
            

            if ($member->nim == '2213010482') {
                return redirect()->route('form.donasi482');
            } elseif ($member->nim == '2213010493') {
                return redirect()->route('form.volunteer493');
            } elseif ($member->nim == '2213010502') {
                return redirect()->route('form.galangdana');
            } else {
                return redirect()->route('form.galangdana'); 
            }
        }

        return back()->withErrors(['nim' => 'NIM atau password salah.']);
    }

    public function logout(Request $request)
    {
        Auth::logout();
        $request->session()->invalidate();
        $request->session()->regenerateToken();

        return redirect()->route('login');
    }
}

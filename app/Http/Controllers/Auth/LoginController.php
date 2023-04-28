<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Http\Requests\LoginRequest;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;

class LoginController extends Controller
{
    public function show()
    {
        if (Auth::user() != null) {
            return redirect(route('admin'));
        } else {
            return view('auth.login');
        }
        
    }

    public function login(LoginRequest $request)
    {
        $credentials = $request -> validated();
        print_r($credentials);
        
        if (Auth::attempt($credentials)) {
            session()->regenerate();
            return redirect() -> intended((route('admin')));
        };
    }

    public function logout()
    {
        Auth::logout();
        return redirect("/");
    }
}
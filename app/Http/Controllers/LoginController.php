<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Auth;
use Illuminate\Validation\ValidationException;

class LoginController extends Controller
{
    public function login(Request $request)
    {
        $request->validate([
            'email' => ['required', 'email'],
            'password' => ['required']
        ]);

        if (Auth::attempt(['email' => $request->email, 'password' => $request->password])){
            return response()->json(Auth::user(), 200);
        }
        throw ValidationException::withMessages([
            'login' => "The provided credentials are incorects"
        ]);
        return true;

    }


    public function logout()
    {
        Auth::logout();
    }
}

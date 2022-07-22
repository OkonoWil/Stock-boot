<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

class AuthController extends Controller
{
    function getLogin()
    {
        return view('auth.login');
    }
    function postLogin(Request $request)
    {
    }
    function getRegister()
    {
        return view('auth.register');
    }
    function postRegister(Request $request)
    {
        $this->validate($request, [
            'name' => ['required'],
            'email' => ['required', 'unique:users,email'],
            'password' => ['required'],
            'condition' => ['accepted']
        ]);
        User::create([
            'name' => $request->name,
            'email' => $request->email,
            'password' => Hash::make($request->password)
        ]);
        return redirect()->route('products.index');
    }
}

<?php

namespace App\Http\Controllers;

use App\Models\User;
use App\Providers\RouteServiceProvider;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;

class AuthController extends Controller
{
    function getLogin()
    {
        return view('auth.login');
    }
    function postLogin(Request $request)
    {
        $this->validate($request, [
            'email' => ['required', 'exists:users,email'],
            'password' => ['required'],
        ]);
        $user = User::query()->where("email", $request->email)->first();
        if (!Hash::check($request->password, $user->password)) {
            return redirect()->back()->withErrors(['password' => 'Invalid credentials']);
        }
        Auth::login($user, $request->remember);
        return redirect()->intended(RouteServiceProvider::HOME);
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
    public function logout()
    {
        Auth::logout();
        return redirect()->route('home');
    }
}

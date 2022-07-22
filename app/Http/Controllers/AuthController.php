<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AuthController extends Controller
{
    function getLogin()
    {
        return view('auth.login');
    }
    function postLogin()
    {
        return view('auth.login');
    }
    function getRegister()
    {
        return view('auth.register');
    }
    function postRegister()
    {
        return view('auth.register');
    }
}

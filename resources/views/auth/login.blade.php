@extends('layouts.auth')

@section('title', 'Login')

@section('content')
<div class="border-2 rounded border-teal-500 p-5 w-500 box-border">
    <form action="{{route('postlogin')}}" method="post" class="box-border">
        @csrf
        <div class=" box-border">
            <input type="email" name="email" id="email" placeholder="Email address" class="block p-2.5 m-2 bg-gray-50 text-white w-full border border-gray-500 rounded-md">
        </div>
        <div class=" box-border">
            <input type="password" name="password" id="password" placeholder="Password" class="block p-2.5 m-2 bg-gray-50 text-white w-full border border-gray-500 rounded-md">
        </div>
        <div class="flex flex-row justify-between box-border">
            <div>
                <input type="checkbox" name="remenber_me" id="remenber_me">
                <label for="remenber_me">Remenber me</label>
            </div>
            <div>
                <a href="" class="text-teal-500">Forgot password?</a>
            </div>
        </div>
        <div class="flex flex-row justify-center m-3 box-border">
            <input type="submit" value="Login" class="bg-teal-700 text-white font-bold border rounded-md text-center px-5 py-2">
        </div>
        <div>
            <p>Don't have an account? <a href="{{route('getregister')}}" class="text-teal-500">Register</a></p>
        </div>
    </form>
</div>
@endsection
@extends('layouts.auth')

@section('title', 'Login')

@section('content')
<div class="border-2 rounded border-teal-500 p-5">
    <form action="{{route('postregister')}}" method="post">
        @csrf
        <div class="m-3">
            <div>
                <label for="name">Name :</label>
                @error('name')
                <span class="text-sm text-red-500">{{$message}}</span>
                @enderror
            </div>
            <input type="text" name="name" id="name" placeholder="Name" class="block p-2.5 m-2 bg-gray-50 text-gray-600 w-full border border-gray-500 box-border rounded-md" value="{{old('name')}}">
        </div>
        <div class="m-3">
            <div>
                <label for="email">Email</label>
                @error('email')
                <span class="text-sm text-red-500">{{$message}}</span>
                @enderror
            </div>
            <input type="email" name="email" id="email" placeholder="Email address" class="block p-2.5 m-2 bg-gray-50 text-gray-600 w-full border border-gray-500 box-border rounded-md" value="{{old('email')}}">
        </div>
        <div class="m-3">
            <div>
                <label for="password">Password</label>
                @error('password')
                <span class="text-sm text-red-500">{{$message}}</span>
                @enderror
            </div>
            <input type="password" name="password" id="password" placeholder="Password" class="block p-2.5 m-2 bg-gray-50 text-gray-600 w-full border border-gray-500 box-border rounded-md">
        </div>
        <div class="m-3">
            <input type="checkbox" name="condition" id="condition">
            <label for="condition"> I accept the <a href="" class="text-teal-500">Terms and Condictions</a></label>
            @error('condition')
                <br><span class="text-sm text-red-500">{{$message}}</span>
            @enderror
        </div>
        <div class="flex flex-row justify-center m-3 box-border">
            <input type="submit" value="Create an account" class="bg-teal-700 text-white font-bold border rounded-md text-center px-5 py-2">
        </div>
        <div>
            <p>Already have an account? <a href="{{route('getlogin')}}" class="text-teal-500">Login here</a></p>
        </div>
    </form>
</div>
@endsection
@extends('layouts.auth')

@section('title', 'Login')

@section('content')
<div class="border-2 rounded border-teal-500">
    <form action="" method="post"></form>
    @csrf
    <div>
        <label for="email">Email</label>
        <input type="email" name="email" id="email">
    </div>
    <div>
        <label for="password">Email</label>
        <input type="password" name="password" id="password">
    </div>
    <div>
        <input type="checkbox" name="remenber_me" id="remenber_me">
        <label for="remenber_me">Remenber me</label>
    </div>
</div>
@endsection
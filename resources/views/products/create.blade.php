@extends('layouts.app')

@section('title')
    Create
@endsection
@section('content')
<h1 class=" text-center m-5  font-bold text-indigo-700  text-3xl pb-1">PRODUCT CREATE</h1>
    <form action="{{route('products.save')}}" method="POST">
        @csrf
        <div class="w-full flex flex-col">
            <div class="w-1/2 flex flex-col m-1 text-xl">
                <div>
                    <label for="name">Name :</label>
                    @error('name')
                    <span class="text-sm text-red-500">{{$message}}</span>
                    @enderror
                </div>
                <input class="border-2 rounded-md border-teal-500 @error('name') border-red-400 @enderror" type="text" name="name" value="{{old('name')}}">
            </div>
            <div class="w-1/2 flex flex-col m-1 text-xl">
                <div>
                    <label for="characteristic">Characteristic :</label>
                    @error('characteristic')
                    <span class="text-sm text-red-500">{{$message}}</span>
                    @enderror
                </div>
                <input class="border-2 rounded-md border-teal-500 @error('characteristic') border-red-400 @enderror" type="text" name="characteristic"  value="{{old('characteristic')}}">
            </div>
            <div class="w-1/2 flex flex-col m-1 text-xl">
                <div>
                    <label for="price">Price :</label>
                    @error('price')
                    <span class="text-sm text-red-500">{{$message}}</span>
                    @enderror
                </div>
                <input class="border-2 rounded-md border-teal-500 @error('price') border-red-400 @enderror" type="number" name="price" value="{{old('price')}}">
            </div>
            <div class="w-1/2 flex flex-col m-1 text-xl">
                <div>
                    <label for="quantity">Quantity :</label>
                    @error('quantity')
                    <span class="text-sm text-red-500">{{$message}}</span>
                    @enderror
                </div>
                <input class="border-2 rounded-md border-teal-500 @error('quantity') border-red-400 @enderror" type="text" name="quantity" value="{{old('quantity')}}">
            </div>
            <div class="w-1/2 flex flex-col m-1 text-xl">
                <label for="stock_min">Stock min :</label>
                <input class="border-2 rounded-md border-teal-500" type="text" name="stock_min" value="{{old('stock_min')}}">
            </div>
            <div class="w-1/2 flex flex-col m-1 text-xl">
                <div>
                    <label for="providor">Providor :</label>
                    @error('providor')
                    <span class="text-sm text-red-500">{{$message}}</span>
                    @enderror
                </div>
                <input class="border-2 rounded-md border-teal-500 @error('providor') border-red-400 @enderror" type="text" name="providor" value="{{old('providor')}}">
            </div>
            <div class="w-1/2 flex flex-col m-1 text-xl">
                <label for="description">description :</label>
                <input class="border-2 rounded-md border-teal-500" type="text" name="description" value="{{old('description')}}">
            </div>
            <div class="flex justify-end w-1/2 m-2">
                <div class="bg-teal-500 m-3 mr-0 p-2 text-2xl text-white font-bold border rounded-md w-1/2 text-center"><input  class="w-full cursor-pointer" type="submit" value="ADD"></div>
            </div>
        </div>
    </form>
@endsection
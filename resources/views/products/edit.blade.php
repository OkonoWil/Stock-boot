@extends('layouts.app')

@section('title')
    Edit
@endsection

@section('content')
<h1 class=" text-center m-5  font-bold text-indigo-700  text-3xl pb-1">PRODUCT EDIT</h1>
    <form action="{{route('products.update',['id' => $product['id']])}}" method="POST">
        @method('PUT')
        @csrf
        <div class="w-full flex flex-col">
            <div class="w-1/2 flex flex-col m-1 text-xl">
                <label class="font-medium text-stone-700" for="title">ID :</label>
                <input class="border-2 rounded-md border-teal-500" type="text" name="id" value="{{$product['id']}}" disabled>
            </div>
            <div class="w-1/2 flex flex-col m-1 text-xl">
                <label for="title">Name :</label>
                <input class="border-2 rounded-md border-teal-500" type="text" name="name" value="{{$product['name']}}" >
            </div>
            <div class="w-1/2 flex flex-col m-2 text-xl">
                <label for="characteristic">Characteristic :</label>
                <input class="border-2 rounded-md border-teal-500" type="text" name="characteristic" value="{{$product['characteristic']}}" >
            </div>
            <div class="w-1/2 flex flex-col m-1 text-xl">
                <label for="price">Price :</label>
                <input class="border-2 rounded-md border-teal-500" type="number" name="price" value="{{$product['price']}}" >
            </div>
            <div class="w-1/2 flex flex-col m-1 text-xl">
                <label for="quantity">Quantity :</label>
                <input class="border-2 rounded-md border-teal-500" type="text" name="quantity" value="{{$product['quantity']}}" >
            </div>
            <div class="w-1/2 flex flex-col m-1 text-xl">
                <label for="stock_min">Stock min :</label>
                <input class="border-2 rounded-md border-teal-500" type="text" name="stock_min" value="{{$product['stock_min']}}" >
            </div>
            <div class="w-1/2 flex flex-col m-1 text-xl">
                <label for="providor">Providor :</label>
                <input class="border-2 rounded-md border-teal-500" type="text" name="providor" value="{{$product['providor']}}" >
            </div>
            <div class="w-1/2 flex flex-col m-2 text-xl">
                <label for="description">description :</label>
                <input class="border-2 rounded-md border-teal-500" type="text" name="description" value="{{$product['description']}}" >
            </div>
            <div class="flex justify-end w-1/2 m-2">
                <div class="bg-teal-500 m-3 mr-0 p-2 text-2xl text-white font-bold border rounded-md w-1/2 text-center"><input type="submit" value="UPDATE"></div>
            </div>
        </div>
    </form>
@endsection
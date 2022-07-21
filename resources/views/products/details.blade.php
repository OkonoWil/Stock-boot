@extends('layouts.app')

@section('title')
    Details
@endsection

@section('content')
<h1 class=" text-center m-5  font-bold text-indigo-700  text-3xl pb-1">PRODUCT DETAILS</h1>
    <form action="{{route('products.update',['id' => $product['id']])}}" method="POST">
        @method('PUT')
        @csrf
        <div class="w-full flex flex-col">
            <div class="flex flex-row m-2 text-xl">
                <label class="font-medium text-stone-700 w-40" for="title">ID :</label>
                <input class="border-2 rounded-md border-teal-500 w-2/3" type="text" name="id" value="{{$product['id']}}" disabled>
            </div>
            <div class="flex flex-row m-2 text-xl">
                <label class="font-medium text-stone-700 w-40" for="title">Name :</label>
                <input class="border-2 rounded-md border-teal-500 w-2/3" type="text" name="name" value="{{$product['name']}}" disabled>
            </div>
            <div class="flex flex-row m-2 text-xl">
                <label class="font-medium text-stone-700 w-40" for="characteristic">Characteristic :</label>
                <input class="border-2 rounded-md border-teal-500 w-2/3" type="text" name="characteristic" value="{{$product['characteristic']}}" disabled>
            </div>
            <div class="flex flex-row m-2 text-xl">
                <label class="font-medium text-stone-700 w-40" for="price">Price :</label>
                <input class="border-2 rounded-md border-teal-500 w-2/3" type="number" name="price" value="{{$product['price']}}" disabled>
            </div>
            <div class="flex flex-row m-2 text-xl">
                <label class="font-medium text-stone-700 w-40" for="quantity">Quantity :</label>
                <input class="border-2 rounded-md border-teal-500 w-2/3" type="text" name="quantity" value="{{$product['quantity']}}" disabled>
            </div>
            <div class="flex flex-row m-2 text-xl">
                <label class="font-medium text-stone-700 w-40" for="stock_min">Stock min :</label>
                <input class="border-2 rounded-md border-teal-500 w-2/3" type="text" name="stock_min" value="{{$product['stock_min']}}" disabled>
            </div>
            <div class="flex flex-row m-2 text-xl">
                <label class="font-medium text-stone-700 w-40" for="providor">Providor :</label>
                <input class="border-2 rounded-md border-teal-500 w-2/3" type="text" name="providor" value="{{$product['providor']}}" disabled>
            </div>
            <div class="flex flex-row m-2 text-xl">
                <label class="font-medium text-stone-700 w-40" class="" for="description">description :</label>
                <input class="border-2 rounded-md border-teal-500 w-2/3" type="text" name="description" value="{{$product['description']}}" disabled>
            </div>
        </div>
    </form>
@endsection
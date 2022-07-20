@extends('layouts.app')

@section('title', 'List')

@section('content')
    <h1 class=" text-center m-5  font-bold text-indigo-700  text-3xl pb-1">PRODUCTS LIST</h1>
    <div class="w-full flex flex-col">
        <div class="flex justify-end w-full">
            <div class="bg-teal-500 m-3 p-2 text-2xl text-white font-bold border rounded-md w-1/4 text-center"><a href="{{route('products.create')}}" aria-rowspan="5">Add</a></div>
        </div>
        <div class="flex flex-row font-bold text-xl p-3 text-teal-500">
            <div class=" w-1/6 text-center">ID</div>
            <div class=" w-1/6 text-center">TITLE</div>
            <div class=" w-1/6 text-center">PRICE</div>
            <div class=" w-1/2 text-center">ACTION</div>
        </div>
        @if($products->count()==0)
        <div class="flex flex-row justify-center text-xl"><p>No product in stock</p></div>
        @endif
        @foreach ($products as $product)
        <div class="flex flex-row   text-xl">
            <div class=" w-1/6 border p-3">{{$product['id']}}</div>
            <div class=" w-1/6 border p-3">{{$product['name']}}</div>
            <div class=" w-1/6 border p-3">{{$product['price']}}FCFA</div>
            <div class=" w-1/6 border p-3">
                <a class="text-blue-500 " href="{{route('products.details', ['id'=>$product['id']])}}">details</a>
                <a class="text-green-400" href="{{route('products.edit', ['id'=>$product['id']])}}">edit</a>
                <form class="text-red-500" action="{{route('products.destroy', ['id' =>$product['id']])}}" method="post">
                    @method('DELETE')
                    @csrf
                    <input type="submit" value="DESTROY">
                </form>
            </div>
        </div>
            
        @endforeach
    </div>
@endsection
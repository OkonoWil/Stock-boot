<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Product;


class ProductController extends Controller
{
    public function index(Request $request)
    {
        $products = Product::query()->get();
        return view('products.index', [
            'products' => $products,
            'request' => $request
        ]);
    }
    public function create()
    {
        return view('products.create');
    }
    public function details($id)
    {
        $product = Product::find($id);
        return view('products.details', ['product' => $product]);
    }
    public function save(Request $request)
    {
        $this->validate($request, [
            'name' => ['unique:products,name']
        ]);
        Product::query()->create($request->except(['_token']));
        return redirect()->route('products.index');
    }
    public function update($id, Request $request)
    {
        Product::find($id)->update($request->all());
        return redirect()->route('products.index');
    }
    public function edit($id)
    {
        $product = Product::find($id)->get()->first();
        return view('products.edit', ['product' => $product]);
    }
    public function destroy($id)
    {
        $product = Product::find($id)->delete();
        return redirect()->route('products.index');
    }
}

//$product = Product::create([
        //    'name' => $request->name,
        //    'characteristic' => $request->characteristic,
        //    'price' => $request->price,
        //    'quantity' => $request->quantity,
        //    'stock_min' => $request->stock_min,
        //    'providor' => $request->providor,
        //    'description' => $request->description,
        //]);
        //$product->save();
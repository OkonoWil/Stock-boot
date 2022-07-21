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
    public function create(Request $request)
    {
        return view('products.create', [
            'request' => $request
        ]);
    }
    public function details(Request $request, $id)
    {
        $product = Product::find($id);
        return view('products.details', [
            'product' => $product,
            'request' => $request
        ]);
    }
    public function save(Request $request)
    {
        $this->validate($request, [
            'name' => ['required', 'unique:products,name'],
            'price' => ['required'],
            'quantity' => ['required'],
            'providor' => ['required'],
            'characteristic' => ['required'],
        ]);
        Product::query()->create($request->except(['_token']));
        return redirect()->route('products.index');
    }
    public function update(Request $request, $id)
    {
        $product = Product::find($id);
        if ($request->name == $product->name) {
            $this->validate($request, [
                'price' => ['required'],
                'quantity' => ['required'],
                'providor' => ['required'],
                'characteristic' => ['required'],
            ]);
        }
        if ($request->name != $product->name) {
            $this->validate($request, [
                'name' => ['required', 'unique:products,name'],
                'price' => ['required'],
                'quantity' => ['required'],
                'providor' => ['required'],
                'characteristic' => ['required'],
            ]);
        }

        Product::find($id)->update($request->all());
        return redirect()->route('products.index');
    }
    public function edit(Request $request, $id)
    {
        //dd($id);
        $product = Product::find($id);
        //dd($product);
        return view('products.edit', [
            'product' => $product,
            'request' => $request
        ]);
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
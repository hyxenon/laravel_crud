<?php

namespace App\Http\Controllers;

use App\Models\Product;
use Illuminate\Http\Request;

class ProductController extends Controller
{

    public function index()
    {
        $products = Product::all();
        return view('dashboard', compact('products'));
    }

    public function create()
    {
        return view('products.create');
    }

    public function store(Request $request)
    {
       
        Product::create([
            'name' => $request->name,
            'image' => $request->image,
            'description' => $request->description,
        ]);

        return redirect()->route('dashboard');
    }

    public function edit(Product $product)
    {
        return view('products.edit', compact('product'));
    }

    public function update(Request $request, Product $product)
    {
       
        $product->update([
            'name' => $request->name,
            'image' => $request->image,
            'description' => $request->description,
        ]);

        return redirect()->route('dashboard');
    }

    public function destroy(Product $product)
    {
        $product->delete();
        return redirect()->route('dashboard');
    }
}

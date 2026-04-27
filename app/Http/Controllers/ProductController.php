<?php

namespace App\Http\Controllers;

use App\Models\Product;
use Illuminate\Http\Request;

class ProductController extends Controller
{
    public function index()
    {
        $products = Product::all();
        return view('product', compact('products'));
    }

    public function create()
    {
        $products = Product::all();
        return view('product', compact('products'));
    }

    public function store(Request $request)
    {
        Product::create($request->all());
        return redirect()->back();
    }

    public function destroy($id)
    {
        Product::destroy($id);
        return redirect()->back();
    }
}

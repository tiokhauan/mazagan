<?php

namespace App\Http\Controllers;

use App\Models\Product;

class PublicProductController extends Controller
{
    public function index()
    {
        $products = Product::all();

        return view('shop.products.content', compact('products'));
    }

    public function show($slug)
    {
        $product = Product::where('slug', $slug)->firstOrFail();

        return view('shop.productDetails.content', compact('product'));
    }
}

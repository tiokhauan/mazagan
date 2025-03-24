<?php

namespace App\Http\Controllers;

use App\Models\Product;
use Illuminate\Http\Request;

class WishlistController extends Controller
{
    public function add(Product $product)
    {
        session()->push('wishlist', $product);

        return back()->with('success', 'Produto adicionado à wishlist!');
    }
}

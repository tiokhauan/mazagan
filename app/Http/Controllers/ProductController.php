<?php

namespace App\Http\Controllers;

use App\Models\Product;
use Illuminate\Http\Request;

class ProductController extends Controller
{
    public function index()
    {
        // Recupera todos os produtos do banco de dados
        $products = Product::all();
        
        // Retorna a view com os produtos
        return view('shop.products.products', compact('products'));
    }
}
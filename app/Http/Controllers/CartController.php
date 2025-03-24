<?php

namespace App\Http\Controllers;

use App\Models\Product;
use Illuminate\Http\Request;

class CartController extends Controller
{
    public function add(Product $product)
    {
        // Aqui você pode adicionar a lógica para adicionar o produto ao carrinho
        // Por exemplo, salvar no session ou no banco de dados

        // Para fins de exemplo, vamos adicionar o produto à sessão
        $cart = session()->get('cart', []);

        $cart[$product->id] = [
            "name" => $product->name,
            "quantity" => 1,
            "price" => $product->price,
        ];

        session()->put('cart', $cart);

        return redirect()->route('products.index')->with('success', 'Produto adicionado ao carrinho');
    }
}

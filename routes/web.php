<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\LeadController;
use App\Models\Product;
use App\Http\Controllers\PublicProductController;
use App\Http\Controllers\CartController;
use App\Http\Controllers\WishlistController;

Route::get('/', function () { return view('home.content'); })->name('home');

Route::get('/sobre-nos', function () { return view('aboutus.content'); })->name('sobre-nos');

Route::get('/contato', function () { return view('contact.content'); })->name('contato');


Route::get('/macloud', function () { return view('services.content', ['service' => 'macloud']); })->name('macloud');
Route::get('/gestao-de-ativos', function () { return view('services.content', ['service' => 'gestaodeativos']); })->name('gestaodeativos');
Route::get('/suporte-tecnico', function () { return view('services.content', ['service' => 'suportetecnico']); })->name('suportetecnico');
Route::get('/consultoria', function () { return view('services.content', ['service' => 'consultoria']); })->name('consultoria');
Route::get('/terceirizacao', function () { return view('services.content', ['service' => 'terceirizacao']); })->name('terceirizacao');
Route::get('/criacao-de-sites', function () { return view('services.content', ['service' => 'criacaodesites']); })->name('criacaodesites');
Route::get('/e-mail-corporativo', function () { return view('services.content', ['service' => 'emailcorporativo']); })->name('emailcorporativo');
Route::get('/seguranca-de-dados', function () { return view('services.content', ['service' => 'segurancadedados']); })->name('segurancadedados');


Route::post('/lead', [LeadController::class, 'store']);

Route::get('/products', [PublicProductController::class, 'index'])->name('products.index');
Route::get('/products/{slug}', [PublicProductController::class, 'show'])->name('products.show');
Route::post('/cart/add/{product}', [CartController::class, 'add'])->name('cart.add');
Route::post('/wishlist/add/{product}', [WishlistController::class, 'add'])->name('wishlist.add');
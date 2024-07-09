<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\Auth;
use App\Models\Product;


use Illuminate\Http\Request;

class ProductController extends Controller
{

    public function index()
    {
        $user = Auth::user();
        $products = Product::all();
        return view('product', compact('user', 'products'));
    }


    public function list()
    {
        $user = Auth::user();
        $products = Product::all();
        return view('productList', compact('user', 'products'));
    }

// Buscar todos os produtos
// $products = Product::all();

// Buscar um produto por ID
// $product = Product::find(1);

// Filtrar produtos com promoção
// $productsOnSale = Product::where('promotion', 1)->get();


}

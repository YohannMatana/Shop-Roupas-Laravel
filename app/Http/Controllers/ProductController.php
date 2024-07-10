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

    public function show($id)
    {
        $product = Product::findOrFail($id);
        return view('product', compact('product'));
    }


}

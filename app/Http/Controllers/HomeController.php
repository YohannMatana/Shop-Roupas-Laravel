<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;
use App\Models\Product;
use App\Models\Category;


class HomeController extends Controller
{
    public function index()
    {
        $user = Auth::user();
        $categories = Category::all(); // Busca todas as categorias disponíveis
        $products = Product::all(); // Aqui você pode ajustar conforme necessário para os produtos exibidos na home

        return view('home', compact('user', 'categories', 'products'));
    }
}

<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Product;


class CartController extends Controller
{
    public function index(Request $request)
    {
        $cart = $request->session()->get('cart',[]);
        return view('cart.index', compact('cart'));
    }

    public function add(Request $request)
    {

        $request->validate([
            'product_id' => 'required|exists:products,id',
            'color' => 'required',
            'size' => 'required',
            'quantity' => 'required|integer|min:1',
        ], [
            'color.required' => 'Por favor, selecione uma cor.',
            'size.required' => 'Por favor, selecione um tamanho.',
        ]);

        $productId = $request->input('product_id');
        $quantity = $request->input('quantity', 1);
        $color = $request->input('color');
        $size = $request->input('size');

        $product = Product::findOrFail($productId);

        $cart = $request->session()->get('cart', []);

        $cartItemKey = $productId . '-' . $color . '-' . $size;

        if (isset($cart[$cartItemKey])) {
            $cart[$cartItemKey]['quantity'] += $quantity;
        } else {
            $cart[$cartItemKey] = [
                'product' => $product,
                'quantity' => $quantity,
                'color' => $color,
                'size' => $size,
            ];
        }

        $request->session()->put('cart', $cart);

        return redirect()->route('cart.index')->with('success', 'Produto adicionado com sucesso!');
    }

    public function remove(Request $request)
    {
        $productId = $request->input('product_id');
        $color = $request->input('color');
        $size = $request->input('size');

        $cart = $request->session()->get('cart', []);

        $cartItemKey = $productId . '-' . $color . '-' . $size;

        if (isset($cart[$cartItemKey])) {
            unset($cart[$cartItemKey]);
        }

        $request->session()->put('cart', $cart);

        return redirect()->route('cart.index')->with('success', 'Produto removido com sucesso!');
    }


}

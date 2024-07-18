<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use PhpSigep\Services\SoapClient\Real as SoapClient;
use App\Models\Product;
use Illuminate\Support\Facades\Auth;


class CartController extends Controller
{
    public function index(Request $request)
    {
        $cart = $request->session()->get('cart', []);
        $subtotal = 0;

        foreach ($cart as $item) {
            $subtotal += $item['product']->price * $item['quantity'];
        }

        return view('cart.index', compact('cart', 'subtotal'));
    }

    public function add(Request $request)
    {
        $request->validate(
            [
                'product_id' => 'required|exists:products,id',
                'color' => 'required',
                'size' => 'required',
                'quantity' => 'required|integer|min:1',
            ],
            [
                'color.required' => 'Por favor, selecione uma cor.',
                'size.required' => 'Por favor, selecione um tamanho.',
            ],
        );

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
            if ($cart[$cartItemKey]['quantity'] > 1) {
                $cart[$cartItemKey]['quantity'] -= 1;
            } else {
                unset($cart[$cartItemKey]);
            }
        }

        $request->session()->put('cart', $cart);

        return redirect()->route('cart.index')->with('success', 'Quantidade do produto atualizada com sucesso!');
    }

    public function checkout(Request $request)
    {
        $user = Auth::user();
        $cart = $request->session()->get('cart', []);
        $subtotal = 0;

        foreach ($cart as $item) {
            $subtotal += $item['product']->price * $item['quantity'];
        }

        // Recuperar o CEP do frete da sessão, se disponível
        $cep = $request->session()->get('cep', null);
        $frete = 0;

        if ($cep) {
            // Parâmetros para o cálculo do frete
            $params = [
                'nCdServico' => '04014', // SEDEX Varejo
                'sCepOrigem' => '70002900', // CEP de origem
                'sCepDestino' => $cep, // CEP de destino do usuário
                'nVlPeso' => '1', // Peso do pacote (em kg)
                'nCdFormato' => '1', // Formato do pacote (1 para caixa/pacote)
                'nVlComprimento' => '20', // Comprimento do pacote (em cm)
                'nVlAltura' => '10', // Altura do pacote (em cm)
                'nVlLargura' => '15', // Largura do pacote (em cm)
                'nVlDiametro' => '0', // Diâmetro do pacote (em cm)
                'sCdMaoPropria' => 'N', // Serviço adicional de mão própria
                'nVlValorDeclarado' => '0', // Valor declarado
                'sCdAvisoRecebimento' => 'N', // Serviço adicional de aviso de recebimento
            ];

            $soapClient = new SoapClient();
            $result = $soapClient->calcPrecoPrazo($params);

            $frete = isset($result['cServico'][0]['Valor']) ? $result['cServico'][0]['Valor'] : 0;
        }

        $total = $subtotal + $frete;

        return view('cart.checkout', compact('cart', 'subtotal', 'frete', 'total', 'user'));
    }

    public function calculateFrete(Request $request)
    {
        $request->validate([
            'cep' => 'required|digits:8',
        ]);

        $cep = $request->input('cep');

        // Armazena o CEP na sessão para uso posterior
        $request->session()->put('cep', $cep);

        return redirect()->route('cart.checkout')->with('success', 'Frete calculado com sucesso!');
    }
}

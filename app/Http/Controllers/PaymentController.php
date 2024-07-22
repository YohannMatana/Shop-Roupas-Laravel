<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Services\PagSeguroService;

class PaymentController extends Controller
{
    protected $pagSeguroService;

    public function __construct(PagSeguroService $pagSeguroService)
    {
        $this->pagSeguroService = $pagSeguroService;
    }

    public function processPayment(Request $request)
    {
        $data = $request->all();
        $response = $this->pagSeguroService->createPaymentRequest($data);

        // Trate a resposta conforme necessário
        return response()->json($response);
    }
}

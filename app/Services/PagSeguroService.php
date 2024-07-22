<?php

namespace App\Services;

use GuzzleHttp\Client;

class PagSeguroService
{
    protected $client;
    protected $email;
    protected $token;
    protected $environment;

    public function __construct()
    {
        $this->client = new Client();
        $this->email = config('pagseguro.email');
        $this->token = config('pagseguro.token');
        $this->environment = config('pagseguro.environment');
    }

    public function createPaymentRequest($data)
    {
        $url = $this->getPagSeguroUrl('/v2/checkout');
        $response = $this->client->post($url, [
            'form_params' => array_merge($data, [
                'email' => $this->email,
                'token' => $this->token,
            ])
        ]);

        return $response->getBody()->getContents();
    }

    protected function getPagSeguroUrl($endpoint)
    {
        $baseUrl = $this->environment === 'sandbox'
            ? 'https://sandbox.pagseguro.uol.com.br'
            : 'https://pagseguro.uol.com.br';

        return $baseUrl . $endpoint;
    }
}

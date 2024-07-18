<?php

namespace Database\Seeders;

use App\Models\User;
use App\Models\Product;
use App\Models\Category;


// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        User::factory()->create([
        'name' => 'Yohann Matana',
        'email' => 'yohann.antunes18@gmail.com',
        'password' => bcrypt('123456'), // Certifique-se de usar bcrypt para criptografar a senha
        'endereco' => 'Rua Antonio Pinheiro Sobrinho, 481', // Exemplo de endereço
        'pais' => 'Brasil', // Exemplo de País
        'cidade' => 'Rio Branco', // Exemplo de cidade
        'estado' => 'AC', // Exemplo de estado (utilizando sigla)
        'cep' => '69918-050', // Exemplo de CEP
        'telefone' => '(68) 99966-9620', // Exemplo de telefone
        'ponto_referencia' => 'Próximo ao Horto Florestal', // Exemplo de ponto de referência
        ]);

        Product::create([
            'name' => 'Vestido Floral',
            'price' => 79.99,
            'promotion' => 0,
            'size' => 'S',
            'color' => 'Floral',
            'image' => 'caminho/para/vestido_floral.jpg',
            'description' => 'Vestido floral para o verão',
            'stock' => 15,
            'category' => 'Vestidos',
        ]);

        Product::create([
            'name' => 'Vestido de Festa',
            'price' => 199.99,
            'promotion' => 0,
            'size' => 'M',
            'color' => 'Preto',
            'image' => 'caminho/para/vestido_festa.jpg',
            'description' => 'Vestido de festa elegante',
            'stock' => 8,
            'category' => 'Vestidos',
        ]);

        Product::create([
            'name' => 'Vestido Casual',
            'price' => 49.99,
            'promotion' => 1,
            'size' => 'L',
            'color' => 'Verde',
            'image' => 'caminho/para/vestido_casual.jpg',
            'description' => 'Vestido casual confortável',
            'stock' => 12,
            'category' => 'Vestidos',
        ]);

        // Produtos na categoria "Cintos"
        Product::create([
            'name' => 'Cinto de Couro',
            'price' => 29.99,
            'promotion' => 0,
            'size' => 'Único',
            'color' => 'Marrom',
            'image' => 'caminho/para/cinto_couro.jpg',
            'description' => 'Cinto de couro genuíno',
            'stock' => 20,
            'category' => 'Cintos',
        ]);

        Product::create([
            'name' => 'Cinto Preto',
            'price' => 19.99,
            'promotion' => 1,
            'size' => 'Único',
            'color' => 'Preto',
            'image' => 'caminho/para/cinto_preto.jpg',
            'description' => 'Cinto preto clássico',
            'stock' => 25,
            'category' => 'Cintos',
        ]);

        Product::create([
            'name' => 'Cinto Vermelho',
            'price' => 24.99,
            'promotion' => 0,
            'size' => 'Único',
            'color' => 'Vermelho',
            'image' => 'caminho/para/cinto_vermelho.jpg',
            'description' => 'Cinto vermelho vibrante',
            'stock' => 10,
            'category' => 'Cintos',
        ]);

        // Produtos na categoria "Bolsas"
        Product::create([
            'name' => 'Bolsa Preta',
            'price' => 89.99,
            'promotion' => 0,
            'size' => 'M',
            'color' => 'Preto',
            'image' => 'caminho/para/bolsa_preta.jpg',
            'description' => 'Bolsa preta elegante',
            'stock' => 5,
            'category' => 'Bolsas',
        ]);

        Product::create([
            'name' => 'Bolsa de Praia',
            'price' => 39.99,
            'promotion' => 1,
            'size' => 'L',
            'color' => 'Colorida',
            'image' => 'caminho/para/bolsa_praia.jpg',
            'description' => 'Bolsa de praia grande',
            'stock' => 8,
            'category' => 'Bolsas',
        ]);

        Product::create([
            'name' => 'Bolsa de Mão',
            'price' => 49.99,
            'promotion' => 0,
            'size' => 'P',
            'color' => 'Branco',
            'image' => 'caminho/para/bolsa_mao.jpg',
            'description' => 'Bolsa de mão prática',
            'stock' => 10,
            'category' => 'Bolsas',
        ]);

        Category::create([
            'name' => 'Bolsas',
            'image' => 'images/bolsa2.png',
        ]);

        Category::create([
            'name' => 'Cintos',
            'image' => 'images/bolsa2.png',
        ]);

        Category::create([
            'name' => 'Vestidos',
            'image' => 'images/bolsa2.png',
        ]);
    }
}

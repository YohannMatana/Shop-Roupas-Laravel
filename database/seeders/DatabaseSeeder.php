<?php

namespace Database\Seeders;

use App\Models\User;
use App\Models\Product;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        // User::factory(10)->create();

        User::factory()->create([
            'name' => 'Test User',
            'email' => 'test@example.com',
        ]);

        Product::create([
            'name' => 'Camiseta',
            'price' => 29.99,
            'promotion' => 0,
            'size' => 'M',
            'image' => 'caminho/para/imagem.jpg',
            'description' => 'Camiseta confortável',
            'stock' => 10,
            'category' => 'Roupas',
        ]);

        Product::create([
            'name' => 'Calça Jeans',
            'price' => 59.99,
            'promotion' => 1,
            'size' => 'L',
            'image' => 'caminho/para/imagem2.jpg',
            'description' => 'Calça jeans elegante',
            'stock' => 5,
            'category' => 'Roupas',
        ]);
    }
}

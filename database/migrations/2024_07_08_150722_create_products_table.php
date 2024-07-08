<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateProductsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('products', function (Blueprint $table) {
            $table->id();
            $table->string('name'); // Nome do produto
            $table->decimal('price', 8, 2); // Preço do produto
            $table->boolean('promotion')->default(0); // Indica se está em promoção (1 ou 0)
            $table->string('size')->nullable(); // Tamanho do produto
            $table->string('image')->nullable(); // URL da imagem do produto
            $table->text('description')->nullable(); // Descrição do produto
            $table->integer('stock')->default(0); // Quantidade em estoque
            $table->string('category')->nullable(); // Categoria do produto
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('products');
    }
}

<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up()
    {
        Schema::table('users', function (Blueprint $table) {
            $table->string('endereco');
            $table->string('cidade');
            $table->string('estado', 2);
            $table->string('pais', 10);
            $table->string('cep', 9);
            $table->string('telefone');
            $table->string('ponto_referencia')->nullable();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('users', function (Blueprint $table) {
            $table->dropColumn([
                'endereco',
                'cidade',
                'estado',
                'pais',
                'cep',
                'telefone',
                'ponto_referencia',
            ]);
        });
    }
};

<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateClientesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('clientes', function (Blueprint $table) {
            $table->string('cli_cpf')->primary();
            $table->string('cli_nome');
            $table->string('cli_cep');
            $table->string('cli_logradouro');
            $table->integer('cli_numero');
            $table->string('cli_bairro');
            $table->string('cli_cidade');
            $table->char('cli_uf',2);
            $table->string('cli_telefone');
            $table->string('cli_email');
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
        Schema::dropIfExists('clientes');
    }
}

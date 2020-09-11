<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateExecucaoServicosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('execucao_servicos', function (Blueprint $table) {
            $table->id('exe_ser_id');
            $table->integer('exe_ser_OrdSerId');
            $table->string('exe_ser_CliCpf');
            $table->string('exe_ser_descricao');
            $table->float('exe_ser_preco');
            $table->smallInteger('exe_ser_pagamento');
            $table->timestamps();
            
            $table->foreign('exe_ser_OrdSerId')->references('ord_ser_id')->on('ordem_servicos');
            $table->foreign('exe_ser_CliCpf')->references('cli_cpf')->on('clientes');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('execucao_servicos');
    }
}

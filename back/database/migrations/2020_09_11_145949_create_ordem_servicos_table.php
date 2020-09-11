<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateOrdemServicosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('ordem_servicos', function (Blueprint $table) {
            $table->id('ord_ser_id');
            $table->string('ord_ser_CliCpf');
            $table->string('ord_ser_orcamentoDescricao');
            $table->string('ord_ser_execucaoDescricao');
            $table->timestamps();          

            $table->foreign('ord_ser_CliCpf')->references('cli_cpf')->on('clientes');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('ordem_servicos');
    }
}

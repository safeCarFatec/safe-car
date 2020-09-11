<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateVeiculosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('veiculos', function (Blueprint $table) {
            $table->string('vei_placa')->primary();
            $table->string('vei_cli_cpf');
            $table->string('vei_fabricante');
            $table->string('vei_modelo');
            $table->integer('vei_ano');
            $table->string('vei_cor');
            $table->timestamps();

            $table->foreign('vei_cli_cpf')->references('cli_cpf')->on('clientes');

        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('veiculos');
    }
}

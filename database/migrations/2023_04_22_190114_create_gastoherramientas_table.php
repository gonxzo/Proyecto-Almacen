<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateGastoherramientasTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('gastoherramientas', function (Blueprint $table) {
            $table->id();
            $table->bigInteger('idregpedido')->unsigned();
            $table->foreign('idregpedido')->references('id')->on('regpedidoherramientas');
            $table->bigInteger('idherramienta')->unsigned();
            $table->foreign('idherramienta')->references('id')->on('herramientas');
            $table->integer('cantidad');
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
        Schema::dropIfExists('gastoherramientas');
    }
}

<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePedidoherrasTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('pedidoherras', function (Blueprint $table) {
            $table->id();
            $table->integer('idph')->unsigned();
            $table->foreign('idph')->references('id')->on('pedidohs');
            $table->integer('herramienta')->unsigned();
            $table->foreign('herramienta')->references('id')->on('herramientas');
            
            $table->string('cantidad');
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
        Schema::dropIfExists('pedidoherras');
    }
}

<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateGastomaterialsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('gastomaterials', function (Blueprint $table) {
            $table->id();
            $table->bigInteger('idregpedido')->unsigned();
            $table->foreign('idregpedido')->references('id')->on('regpedidomaterials');
            $table->bigInteger('idmaterial')->unsigned();
            $table->foreign('idmaterial')->references('id')->on('materials');
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
        Schema::dropIfExists('gastomaterials');
    }
}

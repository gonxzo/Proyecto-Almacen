<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateRegpedidomaterialsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('regpedidomaterials', function (Blueprint $table) {
            $table->id();
            $table->bigInteger('idtrabajador')->unsigned();
            $table->foreign('idtrabajador')->references('id')->on('trabajadors');
            $table->string('detalle');
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
        Schema::dropIfExists('regpedidomaterials');
    }
}

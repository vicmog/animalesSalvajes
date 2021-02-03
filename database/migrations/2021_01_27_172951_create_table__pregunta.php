<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTablePregunta extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('table_pregunta', function (Blueprint $table) {
            $table->id();
            $table->bigInteger('idCarta')->unsigned();
            $table->string('pregunta',150);
            $table->string('opcion1',80);
            $table->string('opcion2',80);
            $table->string('opcion3',80);
            $table->string('opcion4',80);
            $table->foreign('idCarta')->references('id')->on('table_carta');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('table__pregunta');
    }
}

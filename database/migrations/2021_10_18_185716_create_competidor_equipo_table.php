<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateCompetidorEquipoTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('competidor_equipo', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('nombre');

            $table->bigInteger('competidor_id')->unsigned();
            $table->bigInteger('equipo_id')->unsigned();

            $table->timestamps();
            
            $table->foreign('competidor_id')->references('id')->on('competidores')
                  ->onDelete('cascade')
                  ->onUpdate('cascade');

            $table->foreign('equipo_id')->references('id')->on('equipos')
                  ->onDelete('cascade')
                  ->onUpdate('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('competidor_equipo');
    }
}

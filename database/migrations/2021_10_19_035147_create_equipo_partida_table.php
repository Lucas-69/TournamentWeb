<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateEquipoPartidaTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('equipo_partida', function (Blueprint $table) {
            $table->bigIncrements('id');
        
            $table->bigInteger('equipo_id')->unsigned();
            $table->bigInteger('partida_id')->unsigned();

            $table->timestamps();
            
            $table->foreign('equipo_id')->references('id')->on('equipos')
            ->onDelete('cascade')
            ->onUpdate('cascade');

            $table->foreign('partida_id')->references('id')->on('partidas')
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
        Schema::dropIfExists('equipo_partida');
    }
}

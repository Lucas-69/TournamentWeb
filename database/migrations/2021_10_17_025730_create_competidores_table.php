<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateCompetidoresTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('competidores', function (Blueprint $table) {

            $table->id();
            $table->string('nicks')->unique()->nullable(false);
            $table->string('correo')->unique()->nullable(false);
            $table->string('clave')->nullable(false);

           
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
        Schema::dropIfExists('competidores');
    }
}

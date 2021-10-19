<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePagosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('pagos', function (Blueprint $table) {
            
            $table->bigIncrements('id');
            $table->integer('numeroTarj')->unique()->nullable(false);
            $table->string('nombre')->nullable(false);
            $table->date('fechaVenc')->nullable(false);
            $table->integer('cvv')->nullable(false);

            $table->timestamps();

            $table->unsignedBigInteger('pagos_id')->nullable();
            
            $table->foreign('pagos_id')->references('id')->on('competidores')
                  ->onDelete('set null')
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
        Schema::dropIfExists('pagos');
    }
}

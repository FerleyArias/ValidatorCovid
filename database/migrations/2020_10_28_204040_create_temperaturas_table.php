<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTemperaturasTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('temperaturas', function (Blueprint $table) {
            $table->id();
            $table->double('grados',2,1);
            $table->char('num_doc', 15);
            $table->date('fecha');
            $table->timestamps();
            $table->foreign('num_doc')->references('num_doc')->on('personas');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('temperaturas');
    }
}

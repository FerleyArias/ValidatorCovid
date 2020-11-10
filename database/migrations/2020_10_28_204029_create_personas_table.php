<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePersonasTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('personas', function (Blueprint $table) {
            $table->id();
            $table->char('tp_doc', 3);
            $table->char('num_doc', 15)->unique();
            $table->char('nombres', 60);
            $table->char('apellidos');
            $table->integer('edad');
            $table->char('genero',1);
            $table->char('telefono',12);
            $table->char('direccion',150);
            $table->char('email',100);
            $table->char('tp_perso',1);
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
        Schema::dropIfExists('personas');
    }
}

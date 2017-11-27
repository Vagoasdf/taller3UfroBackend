<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class Noticia extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
         Schema::create('noticia', function (Blueprint $table) {
            $table->increments('id');
            $table->string('titular');
            $table->string('entrada');
            $table->longText('cuerpo');
            $table->string('imagen');
            $table->dateTime('fecha');
            $table->integer('categoria_id')->unsigned();
            $table->integer('usuario_id')->unsigned();
            $table->timestamp('created_at')->nullable();
            $table->timestamp('updated_at')->nullable();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('noticia');    }
}

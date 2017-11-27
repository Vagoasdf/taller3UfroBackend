<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class Fk extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('noticia', function (Blueprint $table) {
            $table->foreign('categoria_id')
            ->references('id')->on('categoria')
            ->onDelete('cascade')->onUpdate('cascade');

            $table->foreign('usuario_id')
            ->references('id')->on('usuario')
            ->onDelete('cascade')->onUpdate('cascade');

        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        //
    }
}

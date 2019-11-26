<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateBloquesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('bloques', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->integer("bloque")->notnull();
            $table->string("dia")->notnull();
            $table->string("labName")->notnull();
            $table->integer("availability")->notnull();
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
        Schema::dropIfExists('bloques');
    }
}

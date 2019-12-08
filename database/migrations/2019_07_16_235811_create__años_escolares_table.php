<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateAñosEscolaresTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('años_escolares', function(Blueprint $table) {

            $table->bigIncrements('id');
            $table->string('cod_año_escolar', 10)->unique();
            $table->integer('año_inicio');
            $table->integer('año_cierre');

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
        Schema::dropIfExists('años_escolares');
    }
}

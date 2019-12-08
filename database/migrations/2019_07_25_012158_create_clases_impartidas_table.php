<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateClasesImpartidasTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('clases_impartidas', function (Blueprint $table) {
            $table->bigIncrements('id');

            $table->string('cod_clase', 10)->unique();
            $table->string('cod_profesor', 10);
            $table->string('cod_año_escolar', 10);
            $table->string('cod_materia', 10);
            $table->string('curso');
            $table->string('clase');
            $table->timestamps();

            $table->foreign('cod_profesor')->references('cod_profesor')->on('profesores');
            $table->foreign('cod_año_escolar')->references('cod_año_escolar')->on('años_escolares');
            $table->foreign('cod_materia')->references('cod_materia')->on('materias');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('clases_impartidas');
    }
}

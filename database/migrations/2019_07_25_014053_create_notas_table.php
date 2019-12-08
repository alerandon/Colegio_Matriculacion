<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateNotasTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('notas', function (Blueprint $table) {
            $table->bigIncrements('id');

            $table->string('cod_nota', 10)->unique();
            $table->string('cod_profesor', 10);
            $table->string('cod_alumno', 10);
            $table->string('cedula_identidad');
            $table->string('nombres');
            $table->string('apellidos');
            $table->string('cod_clase', 10);
            $table->string('clase');
            $table->string('curso');
            $table->string('lapso_1');
            $table->string('lapso_2');
            $table->string('lapso_3');
            $table->string('final');
            $table->timestamps();

            $table->foreign('cod_profesor')->references('cod_profesor')->on('profesores');
            $table->foreign('cod_alumno')->references('cod_alumno')->on('alumnos');
            $table->foreign('cod_clase')->references('cod_clase')->on('clases_impartidas');

        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('notas');
    }
}

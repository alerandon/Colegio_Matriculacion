<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateListasAlumnosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('listas_alumnos', function (Blueprint $table) {
            $table->bigIncrements('id');

            $table->string('cod_lista', 10)->unique();
            $table->string('cod_profesor', 10);
            $table->string('cod_clase', 10);
            $table->string('clase');
            $table->string('curso');
            $table->string('cod_alumno', 10);
            $table->string('cedula_identidad');
            $table->string('nombres');
            $table->string('apellidos');
            $table->timestamps();

            $table->foreign('cod_profesor')->references('cod_profesor')->on('profesores');
            $table->foreign('cod_clase')->references('cod_clase')->on('clases_impartidas');
            $table->foreign('cod_alumno')->references('cod_alumno')->on('alumnos');
           
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('listas_alumnos');
    }
}

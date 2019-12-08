<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Representantes extends Model
{
    protected $fillable = ['cod_representante', 'cod_alumno', 'cedula_identidad', 'nombres', 'apellidos', 'fecha_nacimiento', 'lugar_nacimiento', 'correo'];
    
    protected $table = "representantes";

    public function alumnos() {

        return $this->belongsTo('App\alumnos', 'cod_alumno', 'cod_alumno');
    }

}

<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class alumnos extends Model
{
    protected $fillable = ['cod_alumno', 'cedula_identidad', 'nombres', 'apellidos', 'fecha_nacimiento', 'lugar_nacimiento',];
    
    protected $table = "alumnos";

}

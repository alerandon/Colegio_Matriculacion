<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class materias extends Model
{
    protected $fillable = ['cod_materia', 'materia', 'año_curso',];
    
    protected $table = "materias";
}

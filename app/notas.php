<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class notas extends Model
{
    protected $fillable = ['cod_nota', 'cod_profesor', 'cod_alumno', 'cedula_identidad', 'cod_clase', 'nombres', 'apellidos', 'curso', 'clase', 'lapso_1', 'lapso_2', 'lapso_3', 'final'];
    
    protected $table = "notas";


    //Query Scope

    public function scopeClases($query, $clase)
    {
      $select_cla = clases_impartidas::pluck('cod_clase', 'cod_clase')->prepend('~Escoge la clase~', '');

      if ($clase != "" && isset($select_cla[$clase])) 
      {
          $query->where('cod_clase', $clase);
      }

    }

    public function scopeAlumno($query, $alumno)
    {
      $select_al = alumnos::pluck('nombres', 'cod_alumno')->prepend('~Escoge el alumno~', '');

      if ($alumno != "" && isset($select_al[$alumno])) 
      {
          $query->where('cod_alumno', $alumno);
      }

    }

    public function scopeCurso($query, $curso)
    {
      $select_cur = notas::pluck('curso', 'curso')->prepend('~Escoge el curso~', '');

      if ($curso != "" && isset($select_cur[$curso])) 
      {
          $query->where('curso', $curso);
      }

    }


}

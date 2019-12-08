<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

use App\años_escolares;

class clases_impartidas extends Model
{
    protected $fillable = ['cod_clase', 'cod_profesor', 'cod_año_escolar', 'cod_materia', 'curso', 'clase'];
    
    protected $table = "clases_impartidas";


        //Query Scope

        public function scopeAñoescolar($query, $cod_año)
        {
          $select = años_escolares::pluck('año_inicio', 'cod_año_escolar')->prepend('~Escoge el año de inicio~', '');
    
          if ($cod_año != "" && isset($select[$cod_año])) 
          {
              $query->where('cod_año_escolar', $cod_año);
          }
    
        }

}

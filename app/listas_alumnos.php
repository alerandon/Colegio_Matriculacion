<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class listas_alumnos extends Model
{
    protected $fillable = ['cod_lista', 'cod_clase', 'clase', 'curso', 'cod_alumno', 'cod_profesor', 'cedula_identidad', 'nombres', 'apellidos'];
    
    protected $table = "listas_alumnos";


       //Query Scope

       public function scopeClases($query, $clase)
       {
         $select = clases_impartidas::pluck('cod_clase', 'cod_clase')->prepend('~Escoge la clase~', '');
   
         if ($clase != "" && isset($select[$clase])) 
         {
             $query->where('cod_clase', $clase);
         }
   
       }

       
    
    }
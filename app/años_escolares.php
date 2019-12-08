<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class años_escolares extends Model
{
    //Fillable

    protected $fillable = ['cod_año_escolar', 'año_inicio', 'año_cierre',];
    
    //Table name

    protected $table = "años_escolares";

    


  }



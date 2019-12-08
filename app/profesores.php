<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class profesores extends Model
{
    protected $fillable = ['email', 'cod_profesor', 'cedula_identidad', 'nombres', 'apellidos', 'fecha_nacimiento', 'lugar_nacimiento'];
    
    protected $table = "profesores";

    public function users()
    {
        return $this->belongsToMany(User::class)->withTimestamps();
    }

}

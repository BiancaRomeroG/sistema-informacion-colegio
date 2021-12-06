<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class cursos extends Model
{
    use HasFactory;

    protected $table = 'cursos';
    
    const CREATED_AT = null;
    const UPDATED_AT = null;

    protected $fillable = [
        'nivel',
        'cupo_max',
        'cant_alumnos',
    ];



    public function cant_alumnos($gestion){

        $cant = alumnos::join('inscripciones', 'inscripciones.id_alumno','alumnos.id')
            ->where('inscripciones.id_curso','=', $this->id)
            ->whereYear('inscripciones.fecha', '=', $gestion)
        ->count();

        return $cant;
    }
}

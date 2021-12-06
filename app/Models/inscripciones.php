<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class inscripciones extends Model
{
    use HasFactory;

    const CREATED_AT = null;
    const UPDATED_AT = null;

    protected $table = 'inscripciones';
    protected $fillable = [
        'fecha',
        'curso',
        'id_admin',
        'id_alumno',
        'id_curso'
    ];
}

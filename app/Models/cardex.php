<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class cardex extends Model
{
    use HasFactory;

    const UPDATED_AT = null;
    const CREATED_AT = null;

    protected $table = 'cardexes';
    protected $fillable = [
        'gestion',
        'id_curso',
        'id_alumno'
    ];
}

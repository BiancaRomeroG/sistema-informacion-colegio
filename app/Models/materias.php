<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class materias extends Model
{
    use HasFactory;

    const CREATED_AT = null;
    const UPDATED_AT = null;

    protected $table = 'materias';
    protected $fillable = [
        'nombre',
        'descripcion',
        'id_profesor',
    ];
}

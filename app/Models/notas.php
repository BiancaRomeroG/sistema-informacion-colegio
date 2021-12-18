<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class notas extends Model
{
    use HasFactory;

    const UPDATED_AT = null;
    const CREATED_AT = null;

    protected $table = 'notas';
    protected $fillable = [
        'nro_trim',
        'ser',
        'saber',
        'hacer',
        'decidir',
        'nota_trimestral',
        'id_materia',
        'id_boletin'
    ];
}

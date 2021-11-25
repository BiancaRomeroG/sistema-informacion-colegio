<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Persona extends Model
{
    use HasFactory;
    protected $table = 'personas';
    protected $fillable = [
        'nombre',
        'apellido_pat',
        'apellido_mat',
        'ci',
        'fecha_nac',
        'sexo',
        'email',
        'direccion',
        'telefono',
    ];
}

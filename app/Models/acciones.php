<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class acciones extends Model
{
    use HasFactory;

    protected $table = 'acciones';

    const CREATED_AT = null;
    const UPDATED_AT = null;

    protected $fillable = [
        'fecha',
        'descripcion',
        'id_usuario',
    ];
}

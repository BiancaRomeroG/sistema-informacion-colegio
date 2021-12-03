<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class alumnos extends Model
{
    use HasFactory;

    protected $table = 'alumnos';
    protected $fillable = [
        'id_persona',
        'cod_rude',
        'id_tutor',
    ];
        
}

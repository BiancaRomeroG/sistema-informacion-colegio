<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class pagoMensualidad extends Model
{
    use HasFactory;

    const UPDATED_AT = null;
    const CREATED_AT = null;

    protected $table = 'pago_mensualidads';
    protected $fillable = [
        'id_pago',
        'nro_cuota',
        'id_tutor'
    ];
}

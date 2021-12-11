<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class pagoSalarios extends Model
{
    use HasFactory;

    public $timestamps = false;

    protected $fillable = [
        'id_pago',
        'nro_pago',
        'id_profesor',
        'descuento_iva',
        'aporte_afp'
    ];
}

<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class boletines extends Model
{
    use HasFactory;

    protected $table = 'boletines';
    
    const CREATED_AT = null;
    const UPDATED_AT = null;

    protected $fillable = [
        'anho',
        'nro_trim',
        'id_cardex',
    ];
}

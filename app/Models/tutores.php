<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class tutores extends Model
{
    use HasFactory;

    protected $table = 'tutores';
    protected $fillable = [
        'id_persona',
        'parentesco'
    ];
}

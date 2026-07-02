<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class NumerosContacto extends Model
{
    protected $table = 'numeros_contacto';

    protected $fillable = [
        'numero',
        'tipo',
    ];
}

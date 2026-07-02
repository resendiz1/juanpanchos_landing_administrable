<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class CarouselItem extends Model
{
    protected $table = 'carousel_items';

    protected $fillable = [
        'titulo',
        'subtitulo',
        'descripcion',
        'path_imagen',
    ];
}

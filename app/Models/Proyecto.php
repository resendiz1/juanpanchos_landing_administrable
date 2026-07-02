<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;

class Proyecto extends Model
{
    protected $table = 'proyectos';

    protected $fillable = [
        'nombre',
        'link_demo',
        'link_video',
    ];

    public function imagenes(): HasMany
    {
        return $this->hasMany(ImagenesPortafolio::class, 'id_proyecto');
    }
}

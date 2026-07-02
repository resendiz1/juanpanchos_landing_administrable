<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class ImagenesPortafolio extends Model
{
    protected $table = 'imagenes_portafolio';

    protected $fillable = [
        'path_image',
        'id_proyecto',
    ];

    public function proyecto(): BelongsTo
    {
        return $this->belongsTo(Proyecto::class, 'id_proyecto');
    }
}

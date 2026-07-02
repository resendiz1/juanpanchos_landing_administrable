<?php

namespace App\Http\Controllers;

use App\Models\Proyecto;
use App\Models\NumerosContacto;
use App\Models\CarouselItem;

class InicioController extends Controller
{
    public function index()
    {
        $proyectos = Proyecto::with('imagenes')->latest()->get();
        $proyectosJson = $proyectos->map(fn($p) => [
            'id' => (string)$p->id,
            'nombre' => $p->nombre,
            'imagenes' => $p->imagenes->map(fn($i) => asset('storage/' . $i->path_image))->values(),
        ])->keyBy('id');
        $numerosContacto = NumerosContacto::latest()->get();
        $carouselItems = CarouselItem::latest()->get();

        return view('inicio', compact('proyectos', 'proyectosJson', 'numerosContacto', 'carouselItems'));
    }
}

<?php

namespace App\Http\Controllers;

use App\Models\CarouselItem;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class CarouselItemController extends Controller
{
    public function index()
    {
        $items = CarouselItem::latest()->get();
        return view('admin.carousel_items.index', compact('items'));
    }

    public function create()
    {
        return view('admin.carousel_items.form');
    }

    public function store(Request $request)
    {
        $data = $request->validate([
            'titulo' => 'required|string|max:255',
            'subtitulo' => 'nullable|string|max:255',
            'descripcion' => 'nullable|string|max:500',
            'path_imagen' => 'required|image|mimes:jpeg,png,jpg,gif,webp|max:5120',
        ]);

        $data['path_imagen'] = $request->file('path_imagen')->store('carousel', 'public');

        CarouselItem::create($data);

        return redirect()->route('admin.carousel_items.index')->with('success', 'Item del carrusel creado correctamente.');
    }

    public function edit(CarouselItem $carouselItem)
    {
        return view('admin.carousel_items.form', compact('carouselItem'));
    }

    public function update(Request $request, CarouselItem $carouselItem)
    {
        $data = $request->validate([
            'titulo' => 'required|string|max:255',
            'subtitulo' => 'nullable|string|max:255',
            'descripcion' => 'nullable|string|max:500',
            'path_imagen' => 'nullable|image|mimes:jpeg,png,jpg,gif,webp|max:5120',
        ]);

        if ($request->hasFile('path_imagen')) {
            Storage::disk('public')->delete($carouselItem->path_imagen);
            $data['path_imagen'] = $request->file('path_imagen')->store('carousel', 'public');
        }

        $carouselItem->update($data);

        return redirect()->route('admin.carousel_items.index')->with('success', 'Item del carrusel actualizado correctamente.');
    }

    public function destroy(CarouselItem $carouselItem)
    {
        Storage::disk('public')->delete($carouselItem->path_imagen);
        $carouselItem->delete();
        return redirect()->route('admin.carousel_items.index')->with('success', 'Item del carrusel eliminado correctamente.');
    }
}

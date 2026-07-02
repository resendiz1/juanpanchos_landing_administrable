<?php

namespace App\Http\Controllers;

use App\Models\Proyecto;
use App\Models\ImagenesPortafolio;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class ProyectoController extends Controller
{
    public function index()
    {
        $proyectos = Proyecto::with('imagenes')->latest()->get();
        return view('admin.proyectos.index', compact('proyectos'));
    }

    public function create()
    {
        return view('admin.proyectos.form');
    }

    public function store(Request $request)
    {
        $data = $request->validate([
            'nombre' => 'required|string|max:255',
            'link_demo' => 'nullable|string|max:255',
            'link_video' => 'nullable|string|max:255',
        ]);

        $proyecto = Proyecto::create($data);

        if ($request->hasFile('imagenes')) {
            foreach ($request->file('imagenes') as $imagen) {
                if ($imagen && $imagen->isValid()) {
                    $path = $imagen->store('proyectos', 'public');
                    $proyecto->imagenes()->create(['path_image' => $path]);
                }
            }
        }

        return redirect()->route('admin.proyectos.index')->with('success', 'Proyecto creado correctamente.');
    }

    public function edit(Proyecto $proyecto)
    {
        $proyecto->load('imagenes');
        return view('admin.proyectos.form', compact('proyecto'));
    }

    public function update(Request $request, Proyecto $proyecto)
    {
        $data = $request->validate([
            'nombre' => 'required|string|max:255',
            'link_demo' => 'nullable|string|max:255',
            'link_video' => 'nullable|string|max:255',
        ]);

        $proyecto->update($data);

        if ($request->hasFile('imagenes')) {
            foreach ($request->file('imagenes') as $imagen) {
                if ($imagen && $imagen->isValid()) {
                    $path = $imagen->store('proyectos', 'public');
                    $proyecto->imagenes()->create(['path_image' => $path]);
                }
            }
        }

        if ($request->has('eliminar_imagenes')) {
            $imagenes = ImagenesPortafolio::whereIn('id', $request->eliminar_imagenes)->get();
            foreach ($imagenes as $img) {
                Storage::disk('public')->delete($img->path_image);
                $img->delete();
            }
        }

        return redirect()->route('admin.proyectos.index')->with('success', 'Proyecto actualizado correctamente.');
    }

    public function destroy(Proyecto $proyecto)
    {
        foreach ($proyecto->imagenes as $img) {
            Storage::disk('public')->delete($img->path_image);
        }
        $proyecto->imagenes()->delete();
        $proyecto->delete();
        return redirect()->route('admin.proyectos.index')->with('success', 'Proyecto eliminado correctamente.');
    }
}

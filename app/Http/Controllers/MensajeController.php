<?php

namespace App\Http\Controllers;

use App\Models\Mensaje;
use Illuminate\Http\Request;

class MensajeController extends Controller
{
    public function index()
    {
        $mensajes = Mensaje::latest()->paginate(20);
        return view('admin.mensajes.index', compact('mensajes'));
    }

    public function store(Request $request)
    {
        $data = $request->validate([
            'nombre' => 'required|string|max:255',
            'correo' => 'required|email|max:255',
            'telefono' => 'required|string|max:255',
            'mensaje' => 'required|string',
        ]);

        Mensaje::create($data);

        return response()->json(['success' => true, 'message' => 'Mensaje enviado correctamente.']);
    }

    public function show(Mensaje $mensaje)
    {
        return view('admin.mensajes.show', compact('mensaje'));
    }

    public function destroy(Mensaje $mensaje)
    {
        $mensaje->delete();
        return redirect()->route('admin.mensajes.index')->with('success', 'Mensaje eliminado correctamente.');
    }
}

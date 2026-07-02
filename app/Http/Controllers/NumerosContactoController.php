<?php

namespace App\Http\Controllers;

use App\Models\NumerosContacto;
use Illuminate\Http\Request;

class NumerosContactoController extends Controller
{
    public function index()
    {
        $numeros = NumerosContacto::latest()->get();
        return view('admin.numeros_contacto.index', compact('numeros'));
    }

    public function create()
    {
        return view('admin.numeros_contacto.form');
    }

    public function store(Request $request)
    {
        $data = $request->validate([
            'numero' => 'required|string|max:255',
            'tipo' => 'required|in:whatsapp,telefono,telegram',
        ]);

        NumerosContacto::create($data);

        return redirect()->route('admin.numeros_contacto.index')->with('success', 'Número creado correctamente.');
    }

    public function edit(NumerosContacto $numerosContacto)
    {
        return view('admin.numeros_contacto.form', compact('numerosContacto'));
    }

    public function update(Request $request, NumerosContacto $numerosContacto)
    {
        $data = $request->validate([
            'numero' => 'required|string|max:255',
            'tipo' => 'required|in:whatsapp,telefono,telegram',
        ]);

        $numerosContacto->update($data);

        return redirect()->route('admin.numeros_contacto.index')->with('success', 'Número actualizado correctamente.');
    }

    public function destroy(NumerosContacto $numerosContacto)
    {
        $numerosContacto->delete();
        return redirect()->route('admin.numeros_contacto.index')->with('success', 'Número eliminado correctamente.');
    }
}

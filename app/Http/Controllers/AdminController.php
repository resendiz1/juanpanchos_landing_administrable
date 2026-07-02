<?php

namespace App\Http\Controllers;

use App\Models\Mensaje;
use App\Models\Proyecto;
use App\Models\NumerosContacto;
use App\Models\User;

class AdminController extends Controller
{
    public function dashboard()
    {
        $mensajes = Mensaje::latest()->take(10)->get();
        $totalMensajes = Mensaje::count();
        $totalProyectos = Proyecto::count();
        $totalContactos = NumerosContacto::count();
        $totalUsuarios = User::count();
        return view('admin.dashboard', compact('mensajes', 'totalMensajes', 'totalProyectos', 'totalContactos', 'totalUsuarios'));
    }
}

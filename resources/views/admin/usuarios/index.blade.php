@extends('admin.layouts.app')
@section('title', 'Usuarios - Admin')
@section('content')
<div class="d-flex justify-content-between align-items-center mb-4">
  <h2 class="page-title mb-0">Usuarios</h2>
  <a href="{{ route('admin.usuarios.create') }}" class="btn btn-admin">
    <i class="fas fa-plus me-1"></i>Nuevo usuario
  </a>
</div>
<div class="admin-card">
  @if ($usuarios->count())
    <div class="table-responsive">
      <table class="table admin-table">
        <thead>
          <tr>
            <th>ID</th>
            <th>Nombre</th>
            <th>Email</th>
            <th>Teléfono</th>
            <th>Fecha</th>
            <th>Acciones</th>
          </tr>
        </thead>
        <tbody>
          @foreach ($usuarios as $usuario)
            <tr>
              <td>{{ $usuario->id }}</td>
              <td>{{ $usuario->name }}</td>
              <td>{{ $usuario->email }}</td>
              <td>{{ $usuario->phone ?? '—' }}</td>
              <td>{{ $usuario->created_at->format('d/m/Y') }}</td>
              <td>
                <a href="{{ route('admin.usuarios.edit', $usuario) }}" class="btn btn-admin btn-admin-sm">
                  <i class="fas fa-edit me-1"></i>Editar
                </a>
                @if ($usuario->id !== auth()->id())
                  <form method="POST" action="{{ route('admin.usuarios.destroy', $usuario) }}" class="d-inline" onsubmit="return confirm('¿Eliminar este usuario?')">
                    @csrf @method('DELETE')
                    <button type="submit" class="btn btn-admin btn-admin-sm" style="background:#dc3545;">
                      <i class="fas fa-trash me-1"></i>Eliminar
                    </button>
                  </form>
                @endif
              </td>
            </tr>
          @endforeach
        </tbody>
      </table>
    </div>
  @else
    <p style="color:rgba(255,255,255,0.4);">No hay usuarios registrados.</p>
  @endif
</div>
@endsection

@extends('admin.layouts.app')
@section('title', 'Proyectos - Admin')
@section('content')
<div class="d-flex justify-content-between align-items-center mb-4">
  <h2 class="page-title mb-0">Proyectos</h2>
  <a href="{{ route('admin.proyectos.create') }}" class="btn btn-admin">
    <i class="fas fa-plus me-1"></i>Nuevo proyecto
  </a>
</div>
<div class="admin-card">
  @if ($proyectos->count())
    <div class="table-responsive">
      <table class="table admin-table">
        <thead>
          <tr>
            <th>ID</th>
            <th>Nombre</th>
            <th>Link Demo</th>
            <th>Link Video</th>
            <th>Imágenes</th>
            <th>Fecha</th>
            <th>Acciones</th>
          </tr>
        </thead>
        <tbody>
          @foreach ($proyectos as $proyecto)
            <tr>
              <td>{{ $proyecto->id }}</td>
              <td>{{ $proyecto->nombre }}</td>
              <td>
                @if ($proyecto->link_demo)
                  <a href="{{ $proyecto->link_demo }}" target="_blank" style="color:#ffc238;">Abrir</a>
                @else
                  <span style="color:rgba(255,255,255,0.3);">—</span>
                @endif
              </td>
              <td>
                @if ($proyecto->link_video)
                  <a href="{{ $proyecto->link_video }}" target="_blank" style="color:#ffc238;">Abrir</a>
                @else
                  <span style="color:rgba(255,255,255,0.3);">—</span>
                @endif
              </td>
              <td>{{ $proyecto->imagenes->count() }}</td>
              <td>{{ $proyecto->created_at->format('d/m/Y') }}</td>
              <td>
                <a href="{{ route('admin.proyectos.edit', $proyecto) }}" class="btn btn-admin btn-admin-sm">
                  <i class="fas fa-edit me-1"></i>Editar
                </a>
                <form method="POST" action="{{ route('admin.proyectos.destroy', $proyecto) }}" class="d-inline" onsubmit="return confirm('¿Eliminar este proyecto?')">
                  @csrf @method('DELETE')
                  <button type="submit" class="btn btn-admin btn-admin-sm" style="background:#dc3545;">
                    <i class="fas fa-trash me-1"></i>Eliminar
                  </button>
                </form>
              </td>
            </tr>
          @endforeach
        </tbody>
      </table>
    </div>
  @else
    <p style="color:rgba(255,255,255,0.4);">No hay proyectos registrados.</p>
  @endif
</div>
@endsection

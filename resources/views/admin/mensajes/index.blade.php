@extends('admin.layouts.app')
@section('title', 'Mensajes - Admin')
@section('content')
<div class="d-flex justify-content-between align-items-center mb-4">
  <h2 class="page-title mb-0">Mensajes Recibidos</h2>
</div>
<div class="admin-card">
  @if ($mensajes->count())
    <div class="table-responsive">
      <table class="table admin-table">
        <thead>
          <tr>
            <th>ID</th>
            <th>Nombre</th>
            <th>Correo</th>
            <th>Teléfono</th>
            <th>Mensaje</th>
            <th>Fecha</th>
            <th>Acciones</th>
          </tr>
        </thead>
        <tbody>
          @foreach ($mensajes as $mensaje)
            <tr>
              <td>{{ $mensaje->id }}</td>
              <td>{{ $mensaje->nombre }}</td>
              <td>{{ $mensaje->correo }}</td>
              <td>{{ $mensaje->telefono }}</td>
              <td style="max-width:300px;overflow:hidden;text-overflow:ellipsis;white-space:nowrap;">{{ $mensaje->mensaje }}</td>
              <td>{{ $mensaje->created_at->format('d/m/Y H:i') }}</td>
              <td>
                <a href="{{ route('admin.mensajes.show', $mensaje) }}" class="btn btn-admin btn-admin-sm">
                  <i class="fas fa-eye me-1"></i>Ver
                </a>
                <form method="POST" action="{{ route('admin.mensajes.destroy', $mensaje) }}" class="d-inline" onsubmit="return confirm('¿Eliminar este mensaje?')">
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
    {{ $mensajes->links() }}
  @else
    <p style="color:rgba(255,255,255,0.4);">No hay mensajes recibidos.</p>
  @endif
</div>
@endsection

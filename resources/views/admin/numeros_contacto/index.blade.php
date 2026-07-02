@extends('admin.layouts.app')
@section('title', 'Números de Contacto - Admin')
@section('content')
<div class="d-flex justify-content-between align-items-center mb-4">
  <h2 class="page-title mb-0">Números de Contacto</h2>
  <a href="{{ route('admin.numeros_contacto.create') }}" class="btn btn-admin">
    <i class="fas fa-plus me-1"></i>Nuevo número
  </a>
</div>
<div class="admin-card">
  @if ($numeros->count())
    <div class="table-responsive">
      <table class="table admin-table">
        <thead>
          <tr>
            <th>ID</th>
            <th>Número</th>
            <th>Tipo</th>
            <th>Fecha</th>
            <th>Acciones</th>
          </tr>
        </thead>
        <tbody>
          @foreach ($numeros as $numero)
            <tr>
              <td>{{ $numero->id }}</td>
              <td>{{ $numero->numero }}</td>
              <td>
                <span class="badge" style="background:rgba(255,194,56,0.15);color:#ffc238;text-transform:capitalize;">
                  {{ $numero->tipo }}
                </span>
              </td>
              <td>{{ $numero->created_at->format('d/m/Y') }}</td>
              <td>
                <a href="{{ route('admin.numeros_contacto.edit', $numero) }}" class="btn btn-admin btn-admin-sm">
                  <i class="fas fa-edit me-1"></i>Editar
                </a>
                <form method="POST" action="{{ route('admin.numeros_contacto.destroy', $numero) }}" class="d-inline" onsubmit="return confirm('¿Eliminar este número?')">
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
    <p style="color:rgba(255,255,255,0.4);">No hay números registrados.</p>
  @endif
</div>
@endsection

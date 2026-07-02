@extends('admin.layouts.app')
@section('title', 'Carrusel - Admin')
@section('content')
<div class="d-flex justify-content-between align-items-center mb-4">
  <h2 class="page-title mb-0">Items del Carrusel</h2>
  <a href="{{ route('admin.carousel_items.create') }}" class="btn btn-admin">
    <i class="fas fa-plus me-1"></i>Nuevo item
  </a>
</div>
<div class="admin-card">
  @if ($items->count())
    <div class="table-responsive">
      <table class="table admin-table">
        <thead>
          <tr>
            <th>ID</th>
            <th>Imagen</th>
            <th>Título</th>
            <th>Subtítulo</th>
            <th>Fecha</th>
            <th>Acciones</th>
          </tr>
        </thead>
        <tbody>
          @foreach ($items as $item)
            <tr>
              <td>{{ $item->id }}</td>
              <td>
                <img src="{{ asset('storage/' . $item->path_imagen) }}" alt="{{ $item->titulo }}" style="width:80px;height:50px;object-fit:cover;border-radius:8px;border:1px solid rgba(255,194,56,0.15);">
              </td>
              <td>{{ $item->titulo }}</td>
              <td>{{ $item->subtitulo ?? '—' }}</td>
              <td>{{ $item->created_at->format('d/m/Y') }}</td>
              <td>
                <a href="{{ route('admin.carousel_items.edit', $item) }}" class="btn btn-admin btn-admin-sm">
                  <i class="fas fa-edit me-1"></i>Editar
                </a>
                <form method="POST" action="{{ route('admin.carousel_items.destroy', $item) }}" class="d-inline" onsubmit="return confirm('¿Eliminar este item?')">
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
    <p style="color:rgba(255,255,255,0.4);">No hay items en el carrusel.</p>
  @endif
</div>
@endsection

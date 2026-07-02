@extends('admin.layouts.app')
@section('title', isset($carouselItem) ? 'Editar Item' : 'Nuevo Item del Carrusel')
@section('content')
<h2 class="page-title mb-4">{{ isset($carouselItem) ? 'Editar Item del Carrusel' : 'Nuevo Item del Carrusel' }}</h2>
<div class="admin-card">
  <form method="POST" action="{{ isset($carouselItem) ? route('admin.carousel_items.update', $carouselItem) : route('admin.carousel_items.store') }}" enctype="multipart/form-data">
    @csrf
    @if (isset($carouselItem)) @method('PUT') @endif

    <div class="mb-3">
      <label class="form-label-dark">Título</label>
      <input type="text" name="titulo" class="form-control form-control-dark" value="{{ old('titulo', $carouselItem->titulo ?? '') }}" required>
    </div>
    <div class="mb-3">
      <label class="form-label-dark">Subtítulo</label>
      <input type="text" name="subtitulo" class="form-control form-control-dark" value="{{ old('subtitulo', $carouselItem->subtitulo ?? '') }}">
    </div>
    <div class="mb-3">
      <label class="form-label-dark">Descripción</label>
      <textarea name="descripcion" class="form-control form-control-dark" rows="3">{{ old('descripcion', $carouselItem->descripcion ?? '') }}</textarea>
    </div>
    <div class="mb-3">
      <label class="form-label-dark">Imagen de fondo</label>
      <input type="file" name="path_imagen" class="form-control form-control-dark" accept="image/*" {{ isset($carouselItem) ? '' : 'required' }}>
      @if (isset($carouselItem))
        <div class="mt-2">
          <img src="{{ asset('storage/' . $carouselItem->path_imagen) }}" style="width:200px;height:120px;object-fit:cover;border-radius:8px;border:1px solid rgba(255,194,56,0.15);">
        </div>
      @endif
    </div>

    <div class="mt-4">
      <button type="submit" class="btn btn-admin">
        <i class="fas fa-save me-1"></i>{{ isset($carouselItem) ? 'Actualizar' : 'Guardar' }}
      </button>
      <a href="{{ route('admin.carousel_items.index') }}" class="btn btn-admin btn-admin-sm" style="background:transparent;border:1px solid rgba(255,255,255,0.2);color:rgba(255,255,255,0.6);">Cancelar</a>
    </div>
  </form>
</div>
@endsection

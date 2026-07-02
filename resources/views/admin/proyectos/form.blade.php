@extends('admin.layouts.app')
@section('title', isset($proyecto) ? 'Editar Proyecto' : 'Nuevo Proyecto')
@section('content')
<h2 class="page-title mb-4">{{ isset($proyecto) ? 'Editar Proyecto' : 'Nuevo Proyecto' }}</h2>
<div class="admin-card">
  <form method="POST" action="{{ isset($proyecto) ? route('admin.proyectos.update', $proyecto) : route('admin.proyectos.store') }}" enctype="multipart/form-data">
    @csrf
    @if (isset($proyecto)) @method('PUT') @endif

    <div class="mb-3">
      <label class="form-label-dark">Nombre</label>
      <input type="text" name="nombre" class="form-control form-control-dark" value="{{ old('nombre', $proyecto->nombre ?? '') }}" required>
    </div>
    <div class="mb-3">
      <label class="form-label-dark">Link Demo</label>
      <input type="url" name="link_demo" class="form-control form-control-dark" value="{{ old('link_demo', $proyecto->link_demo ?? '') }}">
    </div>
    <div class="mb-3">
      <label class="form-label-dark">Link Video</label>
      <input type="url" name="link_video" class="form-control form-control-dark" value="{{ old('link_video', $proyecto->link_video ?? '') }}">
    </div>
    <div class="mb-3">
      <label class="form-label-dark">Imágenes</label>
      <input type="file" name="imagenes[]" class="form-control form-control-dark" multiple accept="image/*">
    </div>

    @if (isset($proyecto) && $proyecto->imagenes->count())
      <div class="mb-3">
        <label class="form-label-dark">Imágenes actuales</label>
        <div class="row g-2">
          @foreach ($proyecto->imagenes as $imagen)
            <div class="col-4 col-md-3">
              <div class="position-relative">
                <img src="{{ asset('storage/' . $imagen->path_image) }}" class="img-fluid rounded" style="border:1px solid rgba(255,194,56,0.15);height:100px;width:100%;object-fit:cover;">
                <div class="form-check mt-1">
                  <input type="checkbox" name="eliminar_imagenes[]" value="{{ $imagen->id }}" class="form-check-input" id="img_{{ $imagen->id }}" style="border-color:rgba(255,194,56,0.3);">
                  <label class="form-check-label" for="img_{{ $imagen->id }}" style="color:#ff6b6b;font-size:.8rem;">Eliminar</label>
                </div>
              </div>
            </div>
          @endforeach
        </div>
      </div>
    @endif

    <div class="mt-4">
      <button type="submit" class="btn btn-admin">
        <i class="fas fa-save me-1"></i>{{ isset($proyecto) ? 'Actualizar' : 'Guardar' }}
      </button>
      <a href="{{ route('admin.proyectos.index') }}" class="btn btn-admin btn-admin-sm" style="background:transparent;border:1px solid rgba(255,255,255,0.2);color:rgba(255,255,255,0.6);">Cancelar</a>
    </div>
  </form>
</div>
@endsection

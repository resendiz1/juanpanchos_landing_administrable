@extends('admin.layouts.app')
@section('title', isset($usuario) ? 'Editar Usuario' : 'Nuevo Usuario')
@section('content')
<h2 class="page-title mb-4">{{ isset($usuario) ? 'Editar Usuario' : 'Nuevo Usuario' }}</h2>
<div class="admin-card">
  <form method="POST" action="{{ isset($usuario) ? route('admin.usuarios.update', $usuario) : route('admin.usuarios.store') }}">
    @csrf
    @if (isset($usuario)) @method('PUT') @endif

    <div class="mb-3">
      <label class="form-label-dark">Nombre</label>
      <input type="text" name="name" class="form-control form-control-dark" value="{{ old('name', $usuario->name ?? '') }}" required>
    </div>
    <div class="mb-3">
      <label class="form-label-dark">Email</label>
      <input type="email" name="email" class="form-control form-control-dark" value="{{ old('email', $usuario->email ?? '') }}" required>
    </div>
    <div class="mb-3">
      <label class="form-label-dark">Teléfono</label>
      <input type="text" name="phone" class="form-control form-control-dark" value="{{ old('phone', $usuario->phone ?? '') }}">
    </div>
    <div class="mb-3">
      <label class="form-label-dark">{{ isset($usuario) ? 'Nueva contraseña (dejar vacío para mantener)' : 'Contraseña' }}</label>
      <input type="password" name="password" class="form-control form-control-dark" {{ isset($usuario) ? '' : 'required' }}>
    </div>

    <div class="mt-4">
      <button type="submit" class="btn btn-admin">
        <i class="fas fa-save me-1"></i>{{ isset($usuario) ? 'Actualizar' : 'Guardar' }}
      </button>
      <a href="{{ route('admin.usuarios.index') }}" class="btn btn-admin btn-admin-sm" style="background:transparent;border:1px solid rgba(255,255,255,0.2);color:rgba(255,255,255,0.6);">Cancelar</a>
    </div>
  </form>
</div>
@endsection

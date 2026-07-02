@extends('admin.layouts.app')
@section('title', isset($numerosContacto) ? 'Editar Número' : 'Nuevo Número')
@section('content')
<h2 class="page-title mb-4">{{ isset($numerosContacto) ? 'Editar Número' : 'Nuevo Número' }}</h2>
<div class="admin-card">
  <form method="POST" action="{{ isset($numerosContacto) ? route('admin.numeros_contacto.update', $numerosContacto) : route('admin.numeros_contacto.store') }}">
    @csrf
    @if (isset($numerosContacto)) @method('PUT') @endif

    <div class="mb-3">
      <label class="form-label-dark">Número</label>
      <input type="text" name="numero" class="form-control form-control-dark" value="{{ old('numero', $numerosContacto->numero ?? '') }}" required>
    </div>
    <div class="mb-3">
      <label class="form-label-dark">Tipo</label>
      <select name="tipo" class="form-control form-control-dark" required>
        <option value="whatsapp" {{ (old('tipo', $numerosContacto->tipo ?? '') == 'whatsapp') ? 'selected' : '' }}>WhatsApp</option>
        <option value="telefono" {{ (old('tipo', $numerosContacto->tipo ?? '') == 'telefono') ? 'selected' : '' }}>Teléfono</option>
        <option value="telegram" {{ (old('tipo', $numerosContacto->tipo ?? '') == 'telegram') ? 'selected' : '' }}>Telegram</option>
      </select>
    </div>

    <div class="mt-4">
      <button type="submit" class="btn btn-admin">
        <i class="fas fa-save me-1"></i>{{ isset($numerosContacto) ? 'Actualizar' : 'Guardar' }}
      </button>
      <a href="{{ route('admin.numeros_contacto.index') }}" class="btn btn-admin btn-admin-sm" style="background:transparent;border:1px solid rgba(255,255,255,0.2);color:rgba(255,255,255,0.6);">Cancelar</a>
    </div>
  </form>
</div>
@endsection

@extends('admin.layouts.app')
@section('title', 'Mensaje - Admin')
@section('content')
<div class="d-flex justify-content-between align-items-center mb-4">
  <h2 class="page-title mb-0">Mensaje #{{ $mensaje->id }}</h2>
  <a href="{{ route('admin.mensajes.index') }}" class="btn btn-admin btn-admin-sm" style="background:transparent;border:1px solid rgba(255,255,255,0.2);color:rgba(255,255,255,0.6);">
    <i class="fas fa-arrow-left me-1"></i>Volver
  </a>
</div>
<div class="admin-card">
  <div class="row g-3">
    <div class="col-md-6">
      <label class="form-label-dark">Nombre</label>
      <p style="color:#fff;font-weight:500;">{{ $mensaje->nombre }}</p>
    </div>
    <div class="col-md-6">
      <label class="form-label-dark">Correo</label>
      <p style="color:#fff;font-weight:500;">{{ $mensaje->correo }}</p>
    </div>
    <div class="col-md-6">
      <label class="form-label-dark">Teléfono</label>
      <p style="color:#fff;font-weight:500;">{{ $mensaje->telefono }}</p>
    </div>
    <div class="col-md-6">
      <label class="form-label-dark">Fecha</label>
      <p style="color:#fff;font-weight:500;">{{ $mensaje->created_at->format('d/m/Y H:i') }}</p>
    </div>
    <div class="col-12">
      <label class="form-label-dark">Mensaje</label>
      <p style="color:#fff;font-weight:400;line-height:1.8;white-space:pre-wrap;">{{ $mensaje->mensaje }}</p>
    </div>
  </div>
</div>
@endsection

@extends('admin.layouts.app')
@section('title', 'Dashboard - Admin')
@section('content')
<h2 class="page-title mb-4">Dashboard</h2>
<div class="row g-4 mb-4">
  <div class="col-md-3">
    <div class="admin-card text-center">
      <div class="stat">{{ $totalMensajes }}</div>
      <h5>Mensajes</h5>
    </div>
  </div>
  <div class="col-md-3">
    <div class="admin-card text-center">
      <div class="stat">{{ $totalProyectos }}</div>
      <h5>Proyectos</h5>
    </div>
  </div>
  <div class="col-md-3">
    <div class="admin-card text-center">
      <div class="stat">{{ $totalContactos }}</div>
      <h5>Contactos</h5>
    </div>
  </div>
  <div class="col-md-3">
    <div class="admin-card text-center">
      <div class="stat">{{ $totalUsuarios }}</div>
      <h5>Usuarios</h5>
    </div>
  </div>
</div>

<div class="admin-card">
  <div class="d-flex justify-content-between align-items-center mb-3">
    <h5>Últimos Mensajes</h5>
    <a href="{{ route('admin.mensajes.index') }}" class="btn btn-admin btn-admin-sm">Ver todos</a>
  </div>
  @if ($mensajes->count())
    <div class="table-responsive">
      <table class="table admin-table">
        <thead>
          <tr>
            <th>Nombre</th>
            <th>Correo</th>
            <th>Teléfono</th>
            <th>Mensaje</th>
            <th>Fecha</th>
          </tr>
        </thead>
        <tbody>
          @foreach ($mensajes as $mensaje)
            <tr>
              <td>{{ $mensaje->nombre }}</td>
              <td>{{ $mensaje->correo }}</td>
              <td>{{ $mensaje->telefono }}</td>
              <td style="max-width:300px;overflow:hidden;text-overflow:ellipsis;white-space:nowrap;">{{ $mensaje->mensaje }}</td>
              <td>{{ $mensaje->created_at->diffForHumans() }}</td>
            </tr>
          @endforeach
        </tbody>
      </table>
    </div>
  @else
    <p style="color:rgba(255,255,255,0.4);">No hay mensajes aún.</p>
  @endif
</div>
@endsection

<!DOCTYPE html>
<html lang="es">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>@yield('title', 'Admin - <Juan Pancho\'s/>')</title>
  <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css" rel="stylesheet">
  <link href="https://fonts.googleapis.com/css2?family=Inter:wght@300;400;500;600;700;800&display=swap" rel="stylesheet">
  <link href="https://cdnjs.cloudflare.com/ajax/libs/mdb-ui-kit/6.4.2/mdb.min.css" rel="stylesheet">
  @vite(['resources/css/app.css'])
  @stack('styles')
  <style>
    .admin-sidebar {
      background: rgba(13,13,13,0.95);
      border-right: 1px solid rgba(255,194,56,0.1);
      min-height: 100vh;
      padding-top: 1rem;
    }
    .admin-sidebar .nav-link {
      color: rgba(255,255,255,0.6) !important;
      padding: .8rem 1.5rem;
      border-radius: 0;
      font-weight: 500;
      border-left: 3px solid transparent;
    }
    .admin-sidebar .nav-link:hover,
    .admin-sidebar .nav-link.active {
      color: #ffc238 !important;
      background: rgba(255,194,56,0.05);
      border-left-color: #ffc238;
    }
    .admin-content {
      padding: 2rem;
      min-height: 100vh;
      background: #0d0d0d;
    }
    .admin-card {
      background: rgba(255,255,255,0.03);
      border: 1px solid rgba(255,194,56,0.1);
      border-radius: 16px;
      padding: 1.5rem;
    }
    .admin-card h5 { color: #fff; font-weight: 600; }
    .admin-card .stat { font-size: 2.5rem; font-weight: 800; color: #ffc238; }
    .admin-table { color: rgba(255,255,255,0.7); }
    .admin-table th { color: #ffc238; font-weight: 600; border-color: rgba(255,194,56,0.15); }
    .admin-table td { border-color: rgba(255,194,56,0.08); vertical-align: middle; }
    .admin-table tr:hover { background: rgba(255,194,56,0.03); }
    .btn-admin {
      background: #ffc238;
      color: #0d0d0d;
      font-weight: 600;
      border-radius: 50px;
      text-transform: none;
      padding: .4rem 1.2rem;
      font-size: .85rem;
    }
    .btn-admin:hover { background: #ffda6e; color: #0d0d0d; }
    .btn-admin-sm { padding: .2rem .8rem; font-size: .8rem; }
    .page-title { color: #fff; font-weight: 700; }
    .alert-custom {
      border-radius: 12px;
      background: rgba(255,194,56,0.12);
      color: #ffc238;
      border: 1px solid rgba(255,194,56,0.2);
    }
    .form-control-dark {
      background: rgba(255,255,255,0.03) !important;
      border: 1px solid rgba(255,194,56,0.15) !important;
      color: #fff !important;
      border-radius: 12px;
    }
    .form-control-dark:focus {
      border-color: #ffc238 !important;
      box-shadow: 0 0 0 .2rem rgba(255,194,56,0.15) !important;
    }
    .form-label-dark { color: rgba(255,255,255,0.5) !important; }
    select.form-control-dark option { background: #1a1a1a; color: #fff; }
    .admin-topbar {
      background: rgba(13,13,13,0.95);
      border-bottom: 1px solid rgba(255,194,56,0.1);
      padding: 1rem 2rem;
    }
    .admin-topbar .brand { font-weight: 800; font-family: 'Courier New', monospace; font-size: 1.1rem; }
    .admin-topbar .brand .tag, .admin-topbar .brand .slash { color: #ffc238; }
    .admin-topbar .brand .name { color: #fff; }
  </style>
</head>
<body>
  <div class="container-fluid">
    <div class="row">
      <div class="col-lg-2 d-none d-lg-block p-0 admin-sidebar">
        <div class="text-center py-3">
          <a class="brand" href="{{ route('admin.dashboard') }}" style="font-weight:800;font-size:1.2rem;font-family:'Courier New',monospace;text-decoration:none;">
            <span style="color:#ffc238;">&lt;</span>
            <span style="color:#fff;">Admin</span>
            <span style="color:#ffc238;">/&gt;</span>
          </a>
        </div>
        <hr style="border-color:rgba(255,194,56,0.1);">
        <nav class="nav flex-column">
          <a class="nav-link {{ request()->routeIs('admin.dashboard') ? 'active' : '' }}" href="{{ route('admin.dashboard') }}">
            <i class="fas fa-chart-simple me-2"></i>Dashboard
          </a>
          <a class="nav-link {{ request()->routeIs('admin.proyectos.*') ? 'active' : '' }}" href="{{ route('admin.proyectos.index') }}">
            <i class="fas fa-folder-open me-2"></i>Proyectos
          </a>
          <a class="nav-link {{ request()->routeIs('admin.numeros_contacto.*') ? 'active' : '' }}" href="{{ route('admin.numeros_contacto.index') }}">
            <i class="fas fa-phone me-2"></i>Contactos
          </a>
          <a class="nav-link {{ request()->routeIs('admin.mensajes.*') ? 'active' : '' }}" href="{{ route('admin.mensajes.index') }}">
            <i class="fas fa-envelope me-2"></i>Mensajes
          </a>
          <a class="nav-link {{ request()->routeIs('admin.usuarios.*') ? 'active' : '' }}" href="{{ route('admin.usuarios.index') }}">
            <i class="fas fa-users me-2"></i>Usuarios
          </a>
          <hr style="border-color:rgba(255,194,56,0.1);">
          <a class="nav-link" href="{{ route('inicio') }}">
            <i class="fas fa-globe me-2"></i>Ver sitio
          </a>
          <form method="POST" action="{{ route('logout') }}" class="d-inline">
            @csrf
            <button type="submit" class="nav-link w-100 text-start" style="background:none;border:none;cursor:pointer;">
              <i class="fas fa-right-from-bracket me-2"></i>Cerrar sesión
            </button>
          </form>
        </nav>
      </div>

      <div class="col-lg-10 p-0 admin-content">
        <div class="admin-topbar d-lg-none">
          <div class="d-flex justify-content-between align-items-center">
            <a class="brand" href="{{ route('admin.dashboard') }}" style="font-weight:800;font-size:1.1rem;font-family:'Courier New',monospace;text-decoration:none;">
              <span style="color:#ffc238;">&lt;</span>
              <span style="color:#fff;">Admin</span>
              <span style="color:#ffc238;">/&gt;</span>
            </a>
            <form method="POST" action="{{ route('logout') }}" class="d-inline">
              @csrf
              <button type="submit" class="btn btn-admin btn-admin-sm">
                <i class="fas fa-right-from-bracket me-1"></i>Salir
              </button>
            </form>
          </div>
        </div>

        @if (session('success'))
          <div class="alert alert-custom d-flex align-items-center">
            <i class="fas fa-check-circle me-2"></i>{{ session('success') }}
          </div>
        @endif

        @if ($errors->any())
          <div class="alert alert-danger d-flex align-items-center" style="background:rgba(255,0,0,0.1);color:#ff6b6b;border-color:rgba(255,0,0,0.2);border-radius:12px;">
            <i class="fas fa-exclamation-circle me-2"></i>{{ $errors->first() }}
          </div>
        @endif

        @yield('content')
      </div>
    </div>
  </div>

  <script src="https://cdnjs.cloudflare.com/ajax/libs/mdb-ui-kit/6.4.2/mdb.min.js"></script>
  @stack('scripts')
</body>
</html>

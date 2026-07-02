@extends('plantilla')

@section('title', 'Iniciar Sesión - <Juan Pancho\'s/>')

@push('styles')
<style>
  .login-container {
    min-height: 100vh;
    display: flex;
    align-items: center;
    justify-content: center;
    padding: 2rem;
  }
  .login-card {
    background: rgba(255,255,255,0.03);
    backdrop-filter: blur(20px);
    border: 1px solid rgba(255,194,56,0.12);
    border-radius: 24px;
    padding: 3rem 2.5rem;
    width: 100%;
    max-width: 420px;
    transition: all .4s ease;
  }
  .login-card:hover {
    border-color: rgba(255,194,56,0.3);
    box-shadow: 0 20px 60px rgba(255,194,56,0.06);
  }
  .login-card .brand {
    font-size: 1.5rem;
    font-weight: 800;
    font-family: 'Courier New', monospace;
  }
  .login-card .brand .tag,
  .login-card .brand .slash { color: #ffc238; }
  .login-card .brand .name { color: #fff; }
  .login-card h2 { color: #fff; font-weight: 700; }
  .login-card p { color: rgba(255,255,255,0.4); font-size: .95rem; }
  .form-outline .form-control {
    background: rgba(255,255,255,0.03) !important;
    border: 1px solid rgba(255,194,56,0.15);
    color: #fff !important;
    border-radius: 12px;
    padding: .8rem 1rem;
  }
  .form-outline .form-control:focus {
    border-color: #ffc238;
    box-shadow: 0 0 0 .2rem rgba(255,194,56,0.15);
  }
  .form-outline .form-label { color: rgba(255,255,255,0.4) !important; }
  .btn-login {
    background: #ffc238;
    color: #0d0d0d;
    font-weight: 700;
    border-radius: 50px;
    padding: .75rem 2rem;
    text-transform: none;
    transition: all .3s ease;
    width: 100%;
  }
  .btn-login:hover {
    background: #ffda6e;
    transform: translateY(-2px);
    box-shadow: 0 8px 30px rgba(255,194,56,0.25);
  }
  .login-footer {
    color: rgba(255,255,255,0.3);
    font-size: .85rem;
  }
  .login-footer a {
    color: #ffc238;
    text-decoration: none;
  }
  .login-footer a:hover { text-decoration: underline; }
  .input-icon {
    position: relative;
  }
  .input-icon i {
    position: absolute;
    left: 1rem;
    top: 50%;
    transform: translateY(-50%);
    color: rgba(255,255,255,0.25);
    z-index: 2;
  }
  .input-icon .form-control { padding-left: 2.8rem; }
</style>
@endpush

@section('content')
<div class="login-container">
  <div class="login-card">
    <div class="text-center mb-4">
      <a class="brand" href="#">
        <span class="tag">&lt;</span>
        <span class="name">JuanPancho's</span>
        <span class="slash">/&gt;</span>
      </a>
      <h2 class="mt-3">Iniciar Sesión</h2>
      <p>Accede al panel de administración</p>
    </div>

    @if ($errors->any())
      <div class="alert alert-danger fw-bold d-flex align-items-center" style="background:rgba(255,0,0,0.1);color:#ff6b6b;border-color:rgba(255,0,0,0.2);border-radius:12px;">
        <i class="fa fa-exclamation-circle fa-2x mx-3"></i>
        {{ $errors->first() }}
      </div>
    @endif

    @if (session('status'))
      <div class="alert alert-success fw-bold d-flex align-items-center" style="background:rgba(255,194,56,0.15);color:#ffc238;border-color:rgba(255,194,56,0.3);border-radius:12px;">
        <i class="fa fa-check-circle fa-2x mx-3"></i>
        {{ session('status') }}
      </div>
    @endif

    <form method="POST" action="{{ route('login.authenticate') }}">
      @csrf
      <div class="mb-4 input-icon">
        <i class="fas fa-envelope"></i>
        <input type="email" class="form-control" id="email" name="email" value="{{ old('email') }}" placeholder="Correo electrónico" required autofocus>
      </div>
      <div class="mb-4 input-icon">
        <i class="fas fa-lock"></i>
        <input type="password" class="form-control" id="password" name="password" placeholder="Contraseña" required>
      </div>
      <div class="d-flex justify-content-between align-items-center mb-4">
        <div class="form-check">
          <input class="form-check-input" type="checkbox" id="remember" name="remember" style="border-color:rgba(255,194,56,0.3);">
          <label class="form-check-label" for="remember" style="color:rgba(255,255,255,0.5);font-size:.9rem;">Recordarme</label>
        </div>
      </div>
      <button type="submit" class="btn btn-login">
        <i class="fas fa-arrow-right-to-bracket me-2"></i>Entrar
      </button>
    </form>
  </div>
</div>
@endsection

<!DOCTYPE html>
<html lang="es">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>@yield('title', '&lt;Juan Pancho\'s/&gt; - Desarrollo & Soporte')</title>
  <link rel="shortcut icon" href="https://images.vexels.com/media/users/3/157318/isolated/preview/2782b0b66efa5815b12c9c637322aff3-computadora-de-escritorio-icono-computadora.png" type="image/x-icon">
  <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css" rel="stylesheet">
  <link href="https://fonts.googleapis.com/css2?family=Inter:wght@300;400;500;600;700;800&display=swap" rel="stylesheet">
  <link href="https://cdnjs.cloudflare.com/ajax/libs/mdb-ui-kit/6.4.2/mdb.min.css" rel="stylesheet">
    <style>
    * { margin: 0; padding: 0; box-sizing: border-box; }
    body { font-family: 'Inter', sans-serif; overflow-x: hidden; }

    .animated-bg {
      position: fixed;
      top: 0;
      left: 0;
      width: 100%;
      height: 100%;
      z-index: -2;
      background: linear-gradient(135deg, #0d0d0d 0%, #151d28 30%, #1a1a1a 60%, #0d0d0d 100%);
      background-size: 400% 400%;
      animation: gradientShift 15s ease infinite;
    }
    @keyframes gradientShift {
      0% { background-position: 0% 50%; }
      50% { background-position: 100% 50%; }
      100% { background-position: 0% 50%; }
    }
    .orb {
      position: fixed;
      border-radius: 50%;
      filter: blur(80px);
      opacity: 0.15;
      z-index: -1;
      pointer-events: none;
    }
    .orb:nth-child(1) { width:600px;height:600px;background:#ffc238;top:-200px;left:-200px;animation:orbFloat1 20s ease-in-out infinite; }
    .orb:nth-child(2) { width:500px;height:500px;background:#ffca42;bottom:-150px;right:-150px;animation:orbFloat2 25s ease-in-out infinite; }
    .orb:nth-child(3) { width:400px;height:400px;background:#ffc238;top:50%;left:50%;animation:orbFloat3 18s ease-in-out infinite; }
    @keyframes orbFloat1 {
      0%,100%{transform:translate(0,0)scale(1)}
      33%{transform:translate(200px,150px)scale(1.2)}
      66%{transform:translate(100px,300px)scale(0.9)}
    }
    @keyframes orbFloat2 {
      0%,100%{transform:translate(0,0)scale(1)}
      33%{transform:translate(-200px,-100px)scale(1.3)}
      66%{transform:translate(-100px,-200px)scale(0.8)}
    }
    @keyframes orbFloat3 {
      0%,100%{transform:translate(-50%,-50%)scale(1)}
      25%{transform:translate(-30%,-60%)scale(1.1)}
      50%{transform:translate(-60%,-40%)scale(0.9)}
      75%{transform:translate(-40%,-30%)scale(1.2)}
    }

    .navbar {
      background: rgba(13,13,13,0.85) !important;
      backdrop-filter: blur(20px);
      border-bottom: 1px solid rgba(255,194,56,0.1);
      z-index: 1000;
    }
    .navbar-brand { font-weight:800;font-size:1.3rem;font-family:'Courier New',monospace; }
    .navbar-brand .tag, .navbar-brand .slash { color:#ffc238; }
    .navbar-brand .name { color:#fff; }
    .nav-link { font-weight:500;margin:0 0.5rem;color:rgba(255,255,255,0.7)!important;position:relative; }
    .nav-link:hover { color:#ffc238!important; }
    .nav-link::after {
      content:'';position:absolute;bottom:0;left:50%;
      width:0;height:2px;background:#ffc238;
      transition:all .3s ease;transform:translateX(-50%);
    }
    .nav-link:hover::after { width:100%; }

    .hero {
      position:relative;z-index:1;
      min-height:100vh;display:flex;align-items:center;
      padding-top:80px;
    }
    .hero h1 { font-size:4rem;font-weight:800;line-height:1.1; }
    .hero h1 .highlight { background:linear-gradient(135deg,#ffc238,#ffda6e,#ffc238);-webkit-background-clip:text;-webkit-text-fill-color:transparent;background-clip:text; }
    .hero .lead { font-size:1.25rem;color:rgba(255,255,255,0.6); }

    section { position:relative;z-index:1;padding:5rem 0; }
    .section-title { font-weight:700;margin-bottom:.5rem; }
    .section-subtitle { color:rgba(255,255,255,0.4);font-size:1.1rem; }

    .glass-card {
      background:rgba(255,255,255,0.03);
      backdrop-filter:blur(20px);
      border:1px solid rgba(255,194,56,0.08);
      border-radius:24px;
      padding:2rem 1.5rem;
      transition:all .4s cubic-bezier(.175,.885,.32,1.275);
      height:100%;
    }
    .glass-card:hover {
      transform:translateY(-8px)scale(1.02);
      border-color:rgba(255,194,56,0.3);
      box-shadow:0 20px 60px rgba(255,194,56,0.08);
    }
    .glass-card .icon { font-size:2.2rem;margin-bottom:1rem; }
    .glass-card h5 { font-weight:700;margin-bottom:.8rem; }
    .glass-card p { color:rgba(255,255,255,0.5);font-size:.9rem;line-height:1.7; }

    .stat-item h2 { font-size:3rem;font-weight:800;background:linear-gradient(135deg,#ffc238,#ffda6e);-webkit-background-clip:text;-webkit-text-fill-color:transparent;background-clip:text; }
    .stat-item p { color:rgba(255,255,255,0.4);text-transform:uppercase;font-size:.85rem;letter-spacing:1px; }

    .contact-info p { color:rgba(255,255,255,0.5); }
    .contact-info i { width:1.5rem;color:#ffc238; }
    .form-outline .form-control { background:rgba(255,255,255,0.03)!important;border:1px solid rgba(255,194,56,0.15);color:#fff!important; }
    .form-outline .form-control:focus { border-color:#ffc238;box-shadow:0 0 0 .2rem rgba(255,194,56,0.15); }
    .form-outline .form-label { color:rgba(255,255,255,0.4)!important; }

    footer { position:relative;z-index:1;background:rgba(13,13,13,0.8);border-top:1px solid rgba(255,194,56,0.1); }
    .social-icon {
      display:inline-flex;align-items:center;justify-content:center;
      width:40px;height:40px;border-radius:50%;
      background:rgba(255,255,255,0.05);color:rgba(255,255,255,0.5);
      transition:all .3s ease;text-decoration:none;
    }
    .social-icon:hover { background:#ffc238;color:#0d0d0d;transform:translateY(-3px); }

    .img-card {
      border-radius:16px;
      border:1px solid rgba(255,194,56,0.1);
      overflow:hidden;
      transition:all .4s ease;
    }
    .img-card:hover { border-color:rgba(255,194,56,0.3);transform:scale(1.02); }
    .img-card img { width:100%;height:100%;object-fit:cover; }

    .project-card {
      position:relative;
      border-radius:16px;
      overflow:hidden;
      border:1px solid rgba(255,194,56,0.08);
      transition:all .4s ease;
    }
    .project-card:hover { border-color:rgba(255,194,56,0.3);transform:translateY(-5px); }
    .project-card img { width:100%;height:200px;object-fit:cover; }
    .project-overlay {
      position:absolute;bottom:0;left:0;right:0;
      background:linear-gradient(transparent,rgba(0,0,0,0.9));
      padding:1.5rem 1rem .8rem;
    }
    .project-overlay a { color:#ffc238;text-decoration:none;font-size:.85rem; }
    .project-overlay a:hover { text-decoration:underline; }

    .logo-item {
      display:flex;align-items:center;justify-content:center;
      padding:1rem;border-radius:12px;
      background:rgba(255,255,255,0.03);
      border:1px solid rgba(255,194,56,0.08);
      height:100px;
      transition:all .3s ease;
    }
    .logo-item:hover { border-color:rgba(255,194,56,0.3);background:rgba(255,255,255,0.06); }
    .logo-item img { max-width:120px;max-height:60px;filter:brightness(0)invert(1);opacity:.7; }
    .logo-item:hover img { opacity:1; }

    .contact-card {
      background:rgba(255,255,255,0.03);
      border:1px solid rgba(255,194,56,0.1);
      border-radius:20px;
      padding:2rem;
      text-align:center;
      transition:all .3s ease;
      height:100%;
    }
    .contact-card:hover { border-color:rgba(255,194,56,0.3);transform:translateY(-5px); }
    .contact-card i { font-size:2.5rem;color:#ffc238;margin-bottom:1rem; }
    .contact-card h5 { color:#fff;font-weight:600; }
    .contact-card a { color:rgba(255,255,255,0.7);text-decoration:none;font-size:1.1rem; }
    .contact-card a:hover { color:#ffc238; }

    #heroCarousel .carousel-item img { filter:brightness(.5); }
    .carousel-caption { bottom:50%;transform:translateY(50%); }
    .carousel-caption h1 { font-weight:800; }
    .carousel-caption h2 { font-weight:600; }

    @media (max-width:768px) {
      .hero h1 { font-size:2.5rem; }
      .hero { text-align:center; }
      section { padding:3rem 0; }
      .carousel-caption h1 { font-size:1.5rem; }
      .carousel-caption h2 { font-size:1rem; }
    }
    html { scroll-behavior:smooth; }
  </style>
  @vite(['resources/css/app.css'])
  @stack('styles')
</head>
<body>

  <div class="animated-bg"></div>
  <div class="orb"></div>
  <div class="orb"></div>
  <div class="orb"></div>

  @yield('content')

  <script src="https://cdnjs.cloudflare.com/ajax/libs/mdb-ui-kit/6.4.2/mdb.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/emailjs-com@3/dist/email.min.js"></script>
  @vite(['resources/js/app.js'])
  @stack('scripts')
</body>
</html>

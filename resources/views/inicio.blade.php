@extends('plantilla')

@section('title', 'Iniciar Sesión - <Juan Pancho\'s/>')

@section('content')

<body>

  <div class="animated-bg"></div>
  <div class="orb"></div>
  <div class="orb"></div>
  <div class="orb"></div>

  <!-- Navbar -->
  <nav class="navbar navbar-expand-lg navbar-dark fixed-top">
    <div class="container ">
      <div class="row"></div>
      <a class="navbar-brand" href="#">
        <span class="tag">&lt;</span>
        <span class="name">JuanPancho's</span>
        <span class="slash">/&gt;</span>
      </a> 
      <button class="navbar-toggler" type="button" data-mdb-toggle="collapse" data-mdb-target="#navbarNav">
        <i class="fas fa-bars"></i>
      </button>
      <div class="collapse navbar-collapse" id="navbarNav">
        <ul class="navbar-nav ms-auto">
          <li class="nav-item"><a class="nav-link" href="#inicio">Inicio</a></li>
          <li class="nav-item"><a class="nav-link" href="#portafolio">Portafolio</a></li>
          <li class="nav-item"><a class="nav-link" href="#instalacion">Instalación</a></li>
          <li class="nav-item"><a class="nav-link" href="#juegos">Videojuegos</a></li>
          <li class="nav-item"><a class="nav-link" href="#contacto">Contacto</a></li>
          @auth
            <li class="nav-item"><a class="nav-link" href="{{ route('admin.dashboard') }}" style="color:#ffc238!important;"><i class="fas fa-crown me-1"></i>Admin</a></li>
          @endauth
        </ul>
      </div>
    </div>
  </nav>

  <!-- Hero / Carousel -->
  <section id="inicio" class="p-0" style="padding-top:0!important;">
    <div id="heroCarousel" class="carousel slide carousel-fade" data-mdb-ride="carousel" data-mdb-interval="4000" style="min-height:100vh;">
      <div class="carousel-indicators">
        @foreach ($carouselItems as $i)
          <button type="button" data-mdb-target="#heroCarousel" data-mdb-slide-to="{{ $loop->index }}" @class(['active' => $loop->first])></button>
        @endforeach
      </div>
      <div class="carousel-inner" style="min-height:100vh;">
        @forelse ($carouselItems as $item)
          <div class="carousel-item @if ($loop->first) active @endif" style="min-height:100vh;">
            <img src="{{ asset('storage/' . $item->path_imagen) }}" class="d-block w-100" style="height:100vh;object-fit:cover;">
            <div class="carousel-caption">
              <h1 class="display-3 fw-bold border border-4 border-white d-inline-block px-4 py-2">{{ $item->titulo }}</h1>
              @if ($item->subtitulo)
                <h2 class="display-5 fw-bold mt-3">{{ $item->subtitulo }}</h2>
              @endif
              @if ($item->descripcion)
                <h3 class="fw-bold">{{ $item->descripcion }}</h3>
              @endif
            </div>
          </div>
        @empty
          <div class="carousel-item active" style="min-height:100vh;">
            <div style="height:100vh;display:flex;align-items:center;justify-content:center;background:rgba(255,255,255,0.02);">
              <p style="color:rgba(255,255,255,0.3);">No hay items en el carrusel.</p>
            </div>
          </div>
        @endforelse
      </div>
      <button class="carousel-control-prev" type="button" data-mdb-target="#heroCarousel" data-mdb-slide="prev"><span class="carousel-control-prev-icon"></span></button>
      <button class="carousel-control-next" type="button" data-mdb-target="#heroCarousel" data-mdb-slide="next"><span class="carousel-control-next-icon"></span></button>
    </div>
  </section>

  <!-- Soporte a Equipos -->
  <section id="soporte">
    <div class="container">
      <div class="row align-items-center g-5">
        <div class="col-lg-6">
          <h2 class="section-title text-white display-5">Soporte a Equipos de Cómputo</h2>
          <hr style="height:3px;background:#ffc238;width:80px;opacity:1;">
          <p class="mb-4" style="color:rgba(255,255,255,0.6);font-size:1.05rem;line-height:1.8;">
            Ofrecemos soporte técnico especializado para una amplia gama de dispositivos, incluyendo <strong>laptops, computadoras de escritorio, sistemas de punto de venta, cámaras de vigilancia y servidores.</strong>
            Nuestro equipo está capacitado para resolver desde fallas básicas hasta problemas complejos, garantizando un funcionamiento óptimo de tus equipos y la continuidad de tus operaciones.
          </p>
          <h5 class="text-white mb-3"><strong>Brindamos soporte técnico a:</strong></h5>
          <div class="row g-2 mb-4">
            <div class="col-6"><span style="color:rgba(255,255,255,0.7);"><i class="fas fa-laptop me-2" style="color:#ffc238;"></i>Laptops</span></div>
            <div class="col-6"><span style="color:rgba(255,255,255,0.7);"><i class="fas fa-desktop me-2" style="color:#ffc238;"></i>Computadoras de Escritorio</span></div>
            <div class="col-6"><span style="color:rgba(255,255,255,0.7);"><i class="fas fa-cash-register me-2" style="color:#ffc238;"></i>Puntos de venta</span></div>
            <div class="col-6"><span style="color:rgba(255,255,255,0.7);"><i class="fas fa-video me-2" style="color:#ffc238;"></i>Cámaras de vigilancia</span></div>
            <div class="col-6"><span style="color:rgba(255,255,255,0.7);"><i class="fas fa-server me-2" style="color:#ffc238;"></i>Servidores</span></div>
          </div>
          <a href="#contacto" class="btn btn-lg" style="background:#ffc238;color:#0d0d0d;font-weight:600;border-radius:50px;text-transform:none;">
            <i class="fas fa-tools me-2"></i>Cotizar Reparación
          </a>
        </div>
        <div class="col-lg-6">
          <div id="soporteCarousel" class="carousel slide" data-mdb-ride="carousel" data-mdb-interval="2500">
            <div class="carousel-inner rounded-4" style="border:1px solid rgba(255,194,56,0.15);overflow:hidden;">
              <div class="carousel-item active"><img src="img/soporte/1.jpg" class="d-block w-100"></div>
              <div class="carousel-item"><img src="img/soporte/3.jpg" class="d-block w-100"></div>
              <div class="carousel-item"><img src="img/soporte/4.jpg" class="d-block w-100"></div>
              <div class="carousel-item"><img src="img/soporte/5.jpg" class="d-block w-100"></div>
              <div class="carousel-item"><img src="img/soporte/6.jpg" class="d-block w-100"></div>
              <div class="carousel-item"><img src="img/soporte/7.jpg" class="d-block w-100"></div>
              <div class="carousel-item"><img src="img/soporte/8.jpg" class="d-block w-100"></div>
              <div class="carousel-item"><img src="img/soporte/9.jpg" class="d-block w-100"></div>
              <div class="carousel-item"><img src="img/soporte/10.jpg" class="d-block w-100"></div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>



  <!-- Portafolio -->
  <section id="portafolio">
    <div class="container">
      <div class="text-center mb-5">
        <h2 class="section-title text-white display-5">Portafolio de Proyectos</h2>
        <p class="section-subtitle">Conoce algunos de nuestros trabajos</p>
      </div>
      <div class="row g-4">
        @forelse ($proyectos as $proyecto)
          <div class="col-lg-4 col-md-6">
            <div class="project-card" style="cursor:pointer;">
              @if ($proyecto->imagenes->first())
                <img src="{{ asset('storage/' . $proyecto->imagenes->first()->path_image) }}" alt="{{ $proyecto->nombre }}"
                     onclick="abrirModal({{ $proyecto->id }})" style="cursor:pointer;">
              @else
                <div style="height:200px;background:rgba(255,255,255,0.03);display:flex;align-items:center;justify-content:center;color:rgba(255,255,255,0.2);cursor:pointer;" onclick="abrirModal({{ $proyecto->id }})">
                  <i class="fas fa-image fa-3x"></i>
                </div>
              @endif
              <div class="project-overlay d-flex flex-wrap gap-2 align-items-center">
                <h6 class="text-white mb-0 me-auto">{{ $proyecto->nombre }}</h6>
                @if ($proyecto->link_demo)
                  <a href="{{ $proyecto->link_demo }}" target="_blank"><i class="fas fa-external-link-alt me-1"></i>Sitio</a>
                @endif
                @if ($proyecto->link_video)
                  <a href="{{ $proyecto->link_video }}" target="_blank"><i class="fas fa-play me-1"></i>Video</a>
                @endif
              </div>
            </div>
          </div>
        @empty
          <div class="col-12 text-center py-5" style="color:rgba(255,255,255,0.3);">
            <i class="fas fa-folder-open fa-3x mb-3"></i>
            <p>No hay proyectos registrados aún.</p>
          </div>
        @endforelse
      </div>
    </div>
  </section>

  <!-- Instalación de Software -->
  <section id="instalacion">
    <div class="container">
      <div class="text-center mb-5">
        <h2 class="section-title text-white display-5">Instalación de Software Personalizado</h2>
        <p class="section-subtitle">Tu software, listo para trabajar</p>
      </div>
      <div class="row justify-content-center mb-5">
        <div class="col-lg-10">
          <p style="color:rgba(255,255,255,0.6);font-size:1.05rem;line-height:1.8;text-align:center;">
            En un mundo digital en constante evolución, contar con las herramientas adecuadas no es un lujo, es una necesidad. Ya seas estudiante, profesionista, creador de contenido, emprendedor o parte de una empresa consolidada, nuestro servicio está diseñado para ofrecerte instalación de software personalizada, eficiente y segura.
            No solo instalamos programas: te asesoramos, optimizamos tu equipo y nos aseguramos de que cuentes con las aplicaciones correctas para impulsar tu rendimiento.
          </p>
        </div>
      </div>
      <div class="row g-4 mb-5">
        <div class="col-md-4">
          <div class="glass-card text-white">
            <h5 class="text-center" style="color:#ffc238;">Para estudiantes y profesionistas</h5>
            <p><strong>Office, PDF, Navegadores, Herramientas educativas</strong></p>
            <ul style="color:rgba(255,255,255,0.6);font-size:.9rem;">
              <li>Microsoft Office / LibreOffice</li>
              <li>Adobe Acrobat, Foxit PDF</li>
              <li>Zoom, Teams, Google Meet</li>
              <li>Navegadores seguros (Chrome, Brave, Firefox)</li>
            </ul>
          </div>
        </div>
        <div class="col-md-4">
          <div class="glass-card text-white">
            <h5 class="text-center" style="color:#ffc238;">Para creativos y diseñadores</h5>
            <p><strong>Edición y diseño como los profesionales</strong></p>
            <ul style="color:rgba(255,255,255,0.6);font-size:.9rem;">
              <li>Photoshop, Illustrator, CorelDRAW</li>
              <li>Canva Pro, Figma, Inkscape</li>
              <li>Adobe XD, Sketch</li>
            </ul>
          </div>
        </div>
        <div class="col-md-4">
          <div class="glass-card text-white">
            <h5 class="text-center" style="color:#ffc238;">Para editores y creadores de contenido</h5>
            <p><strong>Software para video, audio y redes sociales</strong></p>
            <ul style="color:rgba(255,255,255,0.6);font-size:.9rem;">
              <li>Premiere, After Effects, Filmora, DaVinci Resolve</li>
              <li>Audacity, FL Studio, OBS Studio</li>
              <li>Herramientas para TikTok, Instagram y YouTube</li>
            </ul>
          </div>
        </div>
      </div>
      <div class="row justify-content-center g-3">
        <div class="col-4 col-md-2"><div class="logo-item"><img src="img/logos/adobe.png" alt="Adobe"></div></div>
        <div class="col-4 col-md-2"><div class="logo-item"><img src="img/logos/audacity.png" alt="Audacity"></div></div>
        <div class="col-4 col-md-2"><div class="logo-item"><img src="img/logos/autocad.svg" alt="AutoCAD"></div></div>
        <div class="col-4 col-md-2"><div class="logo-item"><img src="img/logos/corel.png" alt="Corel"></div></div>
        <div class="col-4 col-md-2"><div class="logo-item"><img src="img/logos/solidworks.webp" alt="SolidWorks"></div></div>
      </div>
    </div>
  </section>

  <!-- Videojuegos -->
  <section id="juegos">
    <div class="container">
      <div class="text-center mb-5">
        <h2 class="section-title text-white display-5">El Juego Comienza Aquí</h2>
        <p class="section-subtitle">Venta de videojuegos para consolas y PC</p>
      </div>
      <div class="row g-4">
        <div class="col-md-6 col-lg-3">
          <div class="glass-card text-white text-center">
            <div class="icon"><i class="fas fa-compact-disc" style="color:#ffc238;"></i></div>
            <h5>Videojuegos Originales</h5>
            <p>Explora un catálogo lleno de emoción para PS5, Xbox, Nintendo Switch y PC. Juegos clásicos, nuevos lanzamientos y títulos épicos.</p>
          </div>
        </div>
        <div class="col-md-6 col-lg-3">
          <div class="glass-card text-white text-center">
            <div class="icon"><i class="fas fa-laptop" style="color:#ffca42;"></i></div>
            <h5>Juegos para PC</h5>
            <p>Desde shooters hasta simuladores, licencias originales, instaladores optimizados y compatibilidad garantizada.</p>
          </div>
        </div>
        <div class="col-md-6 col-lg-3">
          <div class="glass-card text-white text-center">
            <div class="icon"><i class="fas fa-gamepad" style="color:#ffda6e;"></i></div>
            <h5>Arcade Retro</h5>
            <p>Stick Arcade con joysticks de calidad profesional y tableros arcade para dos jugadores. Peleas, carreras y nostalgia asegurada.</p>
          </div>
        </div>
        <div class="col-md-6 col-lg-3">
          <div class="glass-card text-white text-center">
            <div class="icon"><i class="fas fa-headphones" style="color:#ffc238;"></i></div>
            <h5>Asesoría Personalizada</h5>
            <p>¿No sabes qué juego elegir o si corre en tu equipo? Te ayudamos a armar el setup ideal para tu estilo de juego.</p>
          </div>
        </div>
      </div>
    </div>
  </section>

  <!-- Contacto -->
  <section id="contacto">
    <div class="container">
      <div class="text-center mb-5">
        <h2 class="section-title text-white display-5">Contáctanos</h2>
        <p class="section-subtitle">Estamos listos para tu próximo proyecto</p>
      </div>
      <div class="row g-4 mb-5">
        @forelse ($numerosContacto as $numero)
          @php
            $iconos = ['whatsapp' => 'fab fa-whatsapp', 'telefono' => 'fas fa-phone-volume', 'telegram' => 'fab fa-telegram'];
            $href = $numero->tipo === 'whatsapp' ? 'https://wa.me/' . preg_replace('/[^0-9]/', '', $numero->numero) : 'tel:' . $numero->numero;
          @endphp
          <div class="col-md-6 col-lg-3">
            <div class="contact-card">
              <i class="{{ $iconos[$numero->tipo] }}"></i>
              <h5>{{ ucfirst($numero->tipo) }}</h5>
              <a href="{{ $href }}" target="_blank">{{ $numero->numero }}</a>
            </div>
          </div>
        @empty
          <div class="col-12 text-center" style="color:rgba(255,255,255,0.3);">
            <p>No hay números de contacto registrados.</p>
          </div>
        @endforelse
      </div>
      <div class="row justify-content-center">
        <div class="col-lg-8">
          <div class="glass-card text-white p-4">
            <h4 class="text-center mb-4" style="color:#ffc238;">Envíanos un mensaje</h4>
            <div class="d-none" id="error">
              <div class="alert alert-danger fw-bold d-flex align-items-center">
                <i class="fa fa-info-circle fa-2x mx-3"></i>
                Se deben llenar todos los campos del formulario.
              </div>
            </div>
            <div class="d-none" id="success">
              <div class="alert alert-success fw-bold d-flex align-items-center" style="background:rgba(255,194,56,0.15);color:#ffc238;border-color:rgba(255,194,56,0.3);">
                <i class="fa fa-check-circle fa-2x mx-3"></i>
                El mensaje se envió correctamente.
              </div>
            </div>
            <form>
              <div class="row g-3">
                <div class="col-md-6">
                  <div class="form-outline">
                    <input type="text" class="form-control" id="name">
                    <label class="form-label" for="name">Nombre</label>
                  </div>
                </div>
                <div class="col-md-6">
                  <div class="form-outline">
                    <input type="email" class="form-control" id="mail">
                    <label class="form-label" for="mail">Correo Electrónico</label>
                  </div>
                </div>
                <div class="col-12">
                  <div class="form-outline">
                    <input type="tel" class="form-control" id="phone">
                    <label class="form-label" for="phone">Teléfono</label>
                  </div>
                </div>
                <div class="col-12">
                  <div class="form-outline">
                    <textarea class="form-control" id="message" rows="4"></textarea>
                    <label class="form-label" for="message">Mensaje</label>
                  </div>
                </div>
                <div class="col-12 text-center">
                  <button type="button" onclick="correo()" class="btn btn-lg rounded-pill px-5" style="background:#ffc238;color:#0d0d0d;font-weight:600;text-transform:none;">
                    <i class="fas fa-paper-plane me-2"></i>Enviar
                  </button>
                </div>
              </div>
            </form>
          </div>
        </div>
      </div>
    </div>
  </section>

  <!-- Modal Galería -->
  <div class="modal fade" id="galeriaModal" tabindex="-1" aria-hidden="true">
    <div class="modal-dialog modal-xl modal-dialog-centered">
      <div class="modal-content" style="background:rgba(13,13,13,0.97);border:1px solid rgba(255,194,56,0.15);border-radius:20px;">
        <div class="modal-header border-0">
          <h5 class="modal-title" id="modalTitulo" style="color:#ffc238;font-weight:700;"></h5>
          <button type="button" class="btn-close btn-close-white" data-mdb-dismiss="modal"></button>
        </div>
        <div class="modal-body p-3">
          <div id="galeriaCarousel" class="carousel slide" data-mdb-ride="false">
            <div class="carousel-inner" id="carouselInner"></div>
            <button class="carousel-control-prev" type="button" data-mdb-target="#galeriaCarousel" data-mdb-slide="prev">
              <span class="carousel-control-prev-icon"></span>
            </button>
            <button class="carousel-control-next" type="button" data-mdb-target="#galeriaCarousel" data-mdb-slide="next">
              <span class="carousel-control-next-icon"></span>
            </button>
            <div class="text-center mt-3">
              <span id="contadorImagenes" style="color:rgba(255,255,255,0.4);font-size:.9rem;"></span>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>

  <!-- Footer -->
  <footer class="text-center text-lg-start py-4">
    <div class="container">
      <div class="row align-items-center">
        <div class="col-md-4 text-center text-md-start mb-3 mb-md-0">
          <a class="navbar-brand" href="#" style="font-weight:800;font-size:1.2rem;"><span class="tag">&lt;</span><span class="name">JuanPancho's</span><span class="slash">/&gt;</span></a>
        </div>
        <div class="col-md-4 text-center mb-3 mb-md-0">
          <span style="color:rgba(255,255,255,0.35);font-size:.9rem;">&copy; 2026 &lt;JuanPancho's/&gt;. Todos los derechos reservados.</span>
        </div>
        <div class="col-md-4 text-center text-md-end">
          <span style="color:rgba(255,255,255,0.35);font-size:.85rem;">With <i class="fas fa-heart" style="color:#ffc238;"></i> by <a href="https://github.com/resendiz1" target="_blank" style="color:#ffc238;text-decoration:none;font-weight:600;">Arturo Resendiz</a></span>
        </div>
      </div>
    </div>
  </footer>

  <div class="social-floating">
    <a href="https://www.instagram.com/juanpanchos_tehuacan/" target="_blank" class="social-floating-link" style="background:#d62976;">
      <i class="fab fa-instagram"></i>
    </a>
    <a href="https://www.facebook.com/profile.php?id=61577993078029" target="_blank" class="social-floating-link" style="background:#1877f2;">
      <i class="fab fa-facebook-f"></i>
    </a>
  </div>

  <style>
    .social-floating {
      position: fixed;
      right: 20px;
      top: 50%;
      transform: translateY(-50%);
      z-index: 9999;
      display: flex;
      flex-direction: column;
      gap: 8px;
    }
    .social-floating-link {
      display: flex;
      align-items: center;
      justify-content: center;
      width: 48px;
      height: 48px;
      border-radius: 50%;
      color: #fff;
      font-size: 1.3rem;
      text-decoration: none;
      transition: all .3s ease;
      box-shadow: 0 4px 15px rgba(0,0,0,0.3);
    }
    .social-floating-link:hover {
      transform: scale(1.15);
      color: #fff;
      box-shadow: 0 6px 25px rgba(0,0,0,0.4);
    }
  </style>

  <script src="https://cdnjs.cloudflare.com/ajax/libs/mdb-ui-kit/6.4.2/mdb.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/emailjs-com@3/dist/email.min.js"></script>
  <script>
    document.addEventListener('DOMContentLoaded', () => {



      const proyectosData = @json($proyectosJson);

    document.getElementById('galeriaCarousel').addEventListener('slid.bs.carousel', function () {
      const total = this.getAttribute('data-total');
      const active = this.querySelector('.carousel-item.active');
      const idx = Array.from(active.parentElement.children).indexOf(active) + 1;
      document.getElementById('contadorImagenes').textContent = `${idx} / ${total}`;
    });

    function abrirModal(proyectoId) {
      const data = proyectosData[proyectoId];
      if (!data || !data.imagenes.length) return;

      document.getElementById('modalTitulo').textContent = data.nombre;
      const inner = document.getElementById('carouselInner');
      inner.innerHTML = data.imagenes.map((img, i) => `
        <div class="carousel-item ${i === 0 ? 'active' : ''}">
          <img src="${img}" alt="${data.nombre}" style="width:100%;max-height:75vh;object-fit:contain;">
        </div>
      `).join('');

      document.getElementById('galeriaCarousel').setAttribute('data-total', data.imagenes.length);
      document.getElementById('contadorImagenes').textContent = `1 / ${data.imagenes.length}`;
      new mdb.Modal(document.getElementById('galeriaModal')).show();
    }

    window.onload = function () {
      emailjs.init('m202FJpgz8JlMhJrh');
    };

    function correo() {
      let $nombre = document.getElementById('name').value;
      let $telefono = document.getElementById('phone').value;
      let $mail = document.getElementById('mail').value;
      let $mensaje = document.getElementById('message').value;
      let $error = document.getElementById('error');
      let $success = document.getElementById('success');

      if ($nombre === '' || $telefono === '' || $mensaje === '') {
        $error.classList.remove('d-none');
        setTimeout(() => { $error.classList.add('d-none'); }, 4000);
        return;
      }

      let parametros = {
        to_email: 'arturo.resendiz@grupopabsa.com',
        name: $nombre,
        phone: $telefono,
        email: $mail,
        message: $mensaje
      };

      fetch('{{ route('contacto.store') }}', {
        method: 'POST',
        headers: { 'Content-Type': 'application/json', 'X-CSRF-TOKEN': '{{ csrf_token() }}' },
        body: JSON.stringify({ nombre: $nombre, correo: $mail, telefono: $telefono, mensaje: $mensaje })
      });

      emailjs.send('service_9m5rcfq', 'template_cfgl7gs', parametros)
        .then(response => {
          $success.classList.remove('d-none');
          setTimeout(() => { $success.classList.add('d-none'); }, 4000);
          document.getElementById('name').value = '';
          document.getElementById('phone').value = '';
          document.getElementById('mail').value = '';
          document.getElementById('message').value = '';
        }, error => {
          alert('El correo no se envió');
        });
    }
  </script>
</body>
@endsection 
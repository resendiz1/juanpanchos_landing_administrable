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
        </ul>
      </div>
    </div>
  </nav>

  <!-- Hero / Carousel -->
  <section id="inicio" class="p-0" style="padding-top:0!important;">
    <div id="heroCarousel" class="carousel slide carousel-fade" data-mdb-ride="carousel" data-mdb-interval="4000" style="min-height:100vh;">
      <div class="carousel-indicators">
        <button type="button" data-mdb-target="#heroCarousel" data-mdb-slide-to="0" class="active"></button>
        <button type="button" data-mdb-target="#heroCarousel" data-mdb-slide-to="1"></button>
        <button type="button" data-mdb-target="#heroCarousel" data-mdb-slide-to="2"></button>
      </div>
      <div class="carousel-inner" style="min-height:100vh;">
        <div class="carousel-item active" style="min-height:100vh;">
          <img src="img/desarrollo_web/Portada.jpeg" class="d-block w-100" style="height:100vh;object-fit:cover;">
          <div class="carousel-caption">
            <h1 class="display-3 fw-bold border border-4 border-white d-inline-block px-4 py-2">Desarrollo de software</h1>
            <h2 class="display-5 fw-bold mt-3">Transformamos tu presencia digital.</h2>
            <h3 class="fw-bold">Creamos páginas y aplicaciones web modernas, rápidas y optimizadas para atraer clientes y potenciar tu negocio.</h3>
          </div>
        </div>
        <div class="carousel-item" style="min-height:100vh;">
          <img src="img/soporte/3.jpg" class="d-block w-100" style="height:100vh;object-fit:cover;">
          <div class="carousel-caption">
            <h1 class="display-3 fw-bold border border-4 border-white d-inline-block px-4 py-2">Soporte Técnico</h1>
            <h2 class="display-5 fw-bold mt-3">Cuidamos tus equipos como si fueran nuestros.</h2>
            <h3 class="fw-bold">Mantenimiento preventivo y correctivo, reparación, limpieza, formateo, actualización y recuperación de datos.</h3>
          </div>
        </div>
        <div class="carousel-item" style="min-height:100vh;">
          <img src="img/programas/solid.jpg" class="d-block w-100" style="height:100vh;object-fit:cover;">
          <div class="carousel-caption">
            <h1 class="display-3 fw-bold border border-4 border-white d-inline-block px-4 py-2">Instalación y Configuración de Software</h1>
            <h2 class="display-5 fw-bold mt-3">Tu software, listo para trabajar.</h2>
            <h3 class="fw-bold">Instalamos y configuramos sistemas operativos, antivirus, herramientas de oficina y software especializado para tu empresa.</h3>
          </div>
        </div>
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

        <div class="col-lg-4 col-md-6">
          <div class="project-card">
            <img src="img/proyectos/botanas_enchiladas.jpg" alt="Botanas Enchiladas">
            <div class="project-overlay">
              <h6 class="text-white mb-1">Botanas Enchiladas</h6>
              <a href="https://resendiz1.github.io/botanas_enchiladas/" target="_blank"><i class="fas fa-external-link-alt me-1"></i>Visitar sitio</a>
            </div>
          </div>
        </div>


        <div class="col-lg-4 col-md-6">
          <div class="project-card">
            <img src="img/proyectos/web_pizeria.jpg" alt="Web Pizeria">
            <div class="project-overlay">
              <h6 class="text-white mb-1">Pedidos Pizzeria</h6>
              <a href="https://resendiz1.github.io/pedidos_pizza/" target="_blank"><i class="fas fa-external-link-alt me-1"></i>Visitar sitio</a>
            </div>
          </div>
        </div>



        <div class="col-lg-4 col-md-6">
          <div class="project-card">
            <img src="img/proyectos/web_vestidos.jpg" alt="Web Tienda Vestidos">
            <div class="project-overlay">
              <h6 class="text-white mb-1">Web Tienda Vestidos</h6>
              <a href="https://resendiz1.github.io/dressShop/" target="_blank"><i class="fas fa-external-link-alt me-1"></i>Visitar sitio</a>
            </div>
          </div>
        </div>


        <div class="col-lg-4 col-md-6">
          <div class="project-card">
            <img src="img/proyectos/llantera.png" alt="Llantera">
            <div class="project-overlay">
              <h6 class="text-white mb-1">Llantera</h6>
              <a href="https://resendiz1.github.io/llantera/" target="_blank"><i class="fas fa-external-link-alt me-1"></i>Visitar sitio</a>
            </div>
          </div>
        </div>


        <div class="col-lg-4 col-md-6">
          <div class="project-card">
            <img src="img/proyectos/tienda_ropa.png" alt="Tienda de Ropa">
            <div class="project-overlay">
              <h6 class="text-white mb-1">Tienda de Ropa</h6>
              <a href="https://resendiz1.github.io/ropa/" target="_blank"><i class="fas fa-external-link-alt me-1"></i>Visitar sitio</a>
            </div>
          </div>
        </div>



        <div class="col-lg-4 col-md-6">
          <div class="project-card">
            <img src="img/proyectos/dulces_tipicos.png" alt="Dulces Típicos">
            <div class="project-overlay">
              <h6 class="text-white mb-1">Dulces Típicos</h6>
              <a href="https://resendiz1.github.io/dulces_tipicos/" target="_blank"><i class="fas fa-external-link-alt me-1"></i>Visitar sitio</a>
            </div>
          </div>
        </div>


        <div class="col-lg-4 col-md-6">
          <div class="project-card">
            <img src="img/proyectos/pasteleria.png" alt="Pasteleria">
            <div class="project-overlay">
              <h6 class="text-white mb-1">Pasteleria</h6>
              <a href="https://resendiz1.github.io/pasteleria/" target="_blank"><i class="fas fa-external-link-alt me-1"></i>Visitar sitio</a>
            </div>
          </div>
        </div>



        <div class="col-lg-4 col-md-6">
          <div class="project-card">
            <img src="img/proyectos/plastimega.jpg" alt="Plastimega">
            <div class="project-overlay">
              <h6 class="text-white mb-1">Plastimega</h6>
              <a href="https://resendiz1.github.io/plastimega2/" target="_blank"><i class="fas fa-external-link-alt me-1"></i>Visitar sitio</a>
            </div>
          </div>
        </div>


        <div class="col-lg-4 col-md-6">
          <div class="project-card">
            <img src="img/proyectos/tacaro.jpg" alt="Ta'-Caro">
            <div class="project-overlay">
              <h6 class="text-white mb-1">Ta'-Caro</h6>
              <a href="https://resendiz1.github.io/ta-caro/" target="_blank"><i class="fas fa-external-link-alt me-1"></i>Visitar sitio</a>
            </div>
          </div>
        </div>
        <div class="col-lg-4 col-md-6">
          <div class="project-card">
            <img src="img/proyectos/chatbot.png" alt="ChatBot">
            <div class="project-overlay">
              <h6 class="text-white mb-1">ChatBot WhatsApp</h6>
              <a href="https://youtu.be/xYOpZFN5QKs" target="_blank" class="me-3"><i class="fas fa-play me-1"></i>Video</a>
              <a href="https://www.mediafire.com/file/ngtvfsefe913dyq/ChatBot.rar/file" target="_blank"><i class="fas fa-download me-1"></i>Descargar</a>
            </div>
          </div>
        </div>
        <div class="col-lg-4 col-md-6">
          <div class="project-card">
            <img src="img/proyectos/generadorQR.png" alt="Generador QR">
            <div class="project-overlay">
              <h6 class="text-white mb-1">Generador QR</h6>
              <a href="https://youtu.be/EDH7JCyFMNo" target="_blank" class="me-3"><i class="fas fa-play me-1"></i>Video</a>
              <a href="https://www.mediafire.com/file/mbjdq8zxq2p7nvg/QRGenerator.exe/file" target="_blank"><i class="fas fa-download me-1"></i>Descargar</a>
            </div>
          </div>
        </div>
        <div class="col-lg-4 col-md-6">
          <div class="project-card">
            <img src="img/proyectos/textoVoz.png" alt="Texto a Voz">
            <div class="project-overlay">
              <h6 class="text-white mb-1">Texto a Voz</h6>
              <a href="https://youtu.be/s5ZPaGvbKI4" target="_blank" class="me-3"><i class="fas fa-play me-1"></i>Video</a>
              <a href="https://resendiz1.github.io/textoAvoz/" target="_blank"><i class="fas fa-external-link-alt me-1"></i>App</a>
            </div>
          </div>
        </div>


        <div class="col-lg-4 col-md-6">
          <div class="project-card">
            <img src="img/proyectos/estadia.jpg" alt="Estadía">
            <div class="project-overlay">
              <h6 class="text-white mb-1">Proyecto Estadía</h6>
            </div>
          </div>
        </div>
        <div class="col-lg-4 col-md-6">
          <div class="project-card">
            <img src="img/proyectos/qualitrack.jpg" alt="Qualitrack">
            <div class="project-overlay">
              <h6 class="text-white mb-1">Qualitrack</h6>
            </div>
          </div>
        </div>
        <div class="col-lg-4 col-md-6">
          <div class="project-card">
            <img src="img/seguridad/clonar_facebook.jpg" alt="Seguridad">
            <div class="project-overlay">
              <h6 class="text-white mb-1">Demo Seguridad</h6>
              <a href="https://youtu.be/xcsyQ0cXeXk" target="_blank"><i class="fas fa-play me-1"></i>Ver video</a>
            </div>
          </div>
        </div>
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
        <div class="col-md-6 col-lg-3">
          <div class="contact-card">
            <i class="fab fa-whatsapp"></i>
            <h5>WhatsApp</h5>
            <a href="https://walink.co/e7dec1" target="_blank">238 127 1940</a>
          </div>
        </div>

        <div class="col-md-6 col-lg-3">
          <div class="contact-card">
            <i class="fas fa-phone-volume"></i>
            <h5>Teléfono</h5>
            <a href="tel:+522211959921">221 195 9921</a>
          </div>
        </div>
        <div class="col-md-6 col-lg-3">
          <div class="contact-card">
            <i class="fas fa-phone-volume"></i>
            <h5>Teléfono</h5>
            <a href="tel:+522381271940">238 127 1940</a>
          </div>
        </div>
        <div class="col-md-6 col-lg-3">
          <div class="contact-card">
            <i class="fas fa-phone-volume"></i>
            <h5>Teléfono</h5>
            <a href="tel:+522381501369">238 150 1369</a>
          </div>
        </div>
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

  <script src="https://cdnjs.cloudflare.com/ajax/libs/gsap/3.12.5/gsap.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/gsap/3.12.5/ScrollTrigger.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/mdb-ui-kit/6.4.2/mdb.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/emailjs-com@3/dist/email.min.js"></script>
  <script>
    document.addEventListener('DOMContentLoaded', () => {

      gsap.registerPlugin(ScrollTrigger);

      // Refresh trigger positions after everything loads (fixes production layout shifts)
      window.addEventListener('load', () => ScrollTrigger.refresh());

      // Navbar background on scroll
      ScrollTrigger.create({
        start: 'top -80px',
        onUpdate: self => {
          const navbar = document.querySelector('.navbar');
          navbar.style.background = self.progress > 0 ? 'rgba(13,13,13,0.95)!important' : 'rgba(13,13,13,0.85)!important';
        }
      });

      // Hero caption entrance
      const heroTl = gsap.timeline({ defaults: { ease: 'power4.out' } });
      heroTl
        .from('.carousel-caption h1', { y: 80, opacity: 0, duration: 1.2, immediateRender: false })
        .from('.carousel-caption h2', { y: 60, opacity: 0, duration: 1, immediateRender: false }, '-=0.6')
        .from('.carousel-caption h3', { y: 40, opacity: 0, duration: 1, immediateRender: false }, '-=0.6');

      // Section titles + subtitles reveal
      gsap.utils.toArray('section').forEach(section => {
        const title = section.querySelector('.section-title');
        const subtitle = section.querySelector('.section-subtitle');
        const tl = gsap.timeline({
          scrollTrigger: {
            trigger: section, start: 'top 80%',
            toggleActions: 'play none none none'
          }
        });
        if (title) tl.from(title, { y: 50, opacity: 0, duration: 0.8, ease: 'power3.out', immediateRender: false });
        if (subtitle) tl.from(subtitle, { y: 30, opacity: 0, duration: 0.6, ease: 'power3.out', immediateRender: false }, '-=0.4');
      });

      // Soporte section split reveal
      gsap.from('#soporte .col-lg-6:first-child', {
        scrollTrigger: { trigger: '#soporte', start: 'top 80%', toggleActions: 'play none none none' },
        x: -60, opacity: 0, duration: 0.8, ease: 'power3.out', immediateRender: false
      });
      gsap.from('#soporte .col-lg-6:last-child', {
        scrollTrigger: { trigger: '#soporte', start: 'top 80%', toggleActions: 'play none none none' },
        x: 60, opacity: 0, duration: 0.8, ease: 'power3.out', immediateRender: false
      });

      // Glass cards fade-up
      gsap.utils.toArray('.glass-card').forEach(card => {
        gsap.from(card, {
          scrollTrigger: { trigger: card, start: 'top 88%', toggleActions: 'play none none none' },
          y: 60, opacity: 0, scale: 0.96, duration: 0.7, ease: 'power3.out', immediateRender: false
        });
      });

      // Project cards staggered
      gsap.utils.toArray('.project-card').forEach((card, i) => {
        gsap.from(card, {
          scrollTrigger: { trigger: card, start: 'top 90%', toggleActions: 'play none none none' },
          y: 50, opacity: 0, duration: 0.5, delay: (i % 3) * 0.08, ease: 'power3.out', immediateRender: false
        });
      });

      // Contact cards stagger
      gsap.from('.contact-card', {
        scrollTrigger: { trigger: '#contacto .row.g-4', start: 'top 80%', toggleActions: 'play none none none' },
        y: 60, opacity: 0, duration: 0.8, stagger: 0.15, ease: 'power3.out', immediateRender: false
      });

      // Logo items stagger
      gsap.from('.logo-item', {
        scrollTrigger: { trigger: '.logo-item', start: 'top 85%', toggleActions: 'play none none none' },
        y: 40, opacity: 0, scale: 0.9, duration: 0.5, stagger: 0.08, ease: 'back.out(1.7)', immediateRender: false
      });

      // Contact form fade-up
      gsap.from('.glass-card form', {
        scrollTrigger: { trigger: '#contacto .glass-card', start: 'top 82%', toggleActions: 'play none none none' },
        y: 40, opacity: 0, duration: 0.8, ease: 'power3.out', immediateRender: false
      });

    });

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
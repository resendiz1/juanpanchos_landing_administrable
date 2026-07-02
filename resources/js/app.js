document.addEventListener('DOMContentLoaded', () => {

    gsap.registerPlugin(ScrollTrigger);

    ScrollTrigger.create({
        start: 'top -80px',
        onUpdate: self => {
            const navbar = document.querySelector('.navbar');
            navbar.style.background = self.progress > 0 ? 'rgba(13,13,13,0.95)!important' : 'rgba(13,13,13,0.85)!important';
        }
    });

    const heroTl = gsap.timeline({ defaults: { ease: 'power4.out' } });
    heroTl
        .from('.carousel-caption h1', { y: 80, opacity: 0, duration: 1.2, immediateRender: false })
        .from('.carousel-caption h2', { y: 60, opacity: 0, duration: 1, immediateRender: false }, '-=0.6')
        .from('.carousel-caption h3', { y: 40, opacity: 0, duration: 1, immediateRender: false }, '-=0.6');

    gsap.utils.toArray('section').forEach(section => {
        const title = section.querySelector('.section-title');
        const subtitle = section.querySelector('.section-subtitle');
        const tl = gsap.timeline({
            scrollTrigger: {
                trigger: section, start: 'top 80%',
                toggleActions: 'play none none reverse'
            }
        });
        if (title) tl.from(title, { y: 50, opacity: 0, duration: 0.8, ease: 'power3.out', immediateRender: false });
        if (subtitle) tl.from(subtitle, { y: 30, opacity: 0, duration: 0.6, ease: 'power3.out', immediateRender: false }, '-=0.4');
    });

    gsap.from('#soporte .col-lg-6:first-child', {
        scrollTrigger: { trigger: '#soporte', start: 'top 80%', toggleActions: 'play none none reverse' },
        x: -60, opacity: 0, duration: 0.8, ease: 'power3.out', immediateRender: false
    });
    gsap.from('#soporte .col-lg-6:last-child', {
        scrollTrigger: { trigger: '#soporte', start: 'top 80%', toggleActions: 'play none none reverse' },
        x: 60, opacity: 0, duration: 0.8, ease: 'power3.out', immediateRender: false
    });

    gsap.utils.toArray('.glass-card').forEach(card => {
        gsap.from(card, {
            scrollTrigger: { trigger: card, start: 'top 88%', toggleActions: 'play none none reverse' },
            y: 60, opacity: 0, scale: 0.96, duration: 0.7, ease: 'power3.out', immediateRender: false
        });
    });

    gsap.utils.toArray('.project-card').forEach((card, i) => {
        gsap.from(card, {
            scrollTrigger: { trigger: card, start: 'top 90%', toggleActions: 'play none none reverse' },
            y: 50, opacity: 0, duration: 0.5, delay: (i % 3) * 0.08, ease: 'power3.out', immediateRender: false
        });
    });

    gsap.from('.contact-card', {
        scrollTrigger: { trigger: '#contacto .row.g-4', start: 'top 80%', toggleActions: 'play none none reverse' },
        y: 60, opacity: 0, duration: 0.8, stagger: 0.15, ease: 'power3.out', immediateRender: false
    });

    gsap.from('.logo-item', {
        scrollTrigger: { trigger: '.logo-item', start: 'top 85%', toggleActions: 'play none none reverse' },
        y: 40, opacity: 0, scale: 0.9, duration: 0.5, stagger: 0.08, ease: 'back.out(1.7)', immediateRender: false
    });

    gsap.from('.glass-card form', {
        scrollTrigger: { trigger: '#contacto .glass-card', start: 'top 82%', toggleActions: 'play none none reverse' },
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

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

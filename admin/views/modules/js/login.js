$(document).ready(function(){
    $("#form_login").submit(function() {

        var form = $(this).serialize();
    
        let timerInterval
        Swal.fire({
            imageWidth: 100,
            imageHeight: 80,
            title: 'Cargando....!',
            html: 'Por favor espere mientras inicia sesión.',
            timer: 2000,
            onBeforeOpen: () => {
                Swal.showLoading()
                timerInterval = setInterval(() => {
                    Swal.getContent().querySelector('strong')
                        .textContent = Swal.getTimerLeft()
                }, 100)
            },
            onClose: () => {
                clearInterval(timerInterval)
            }
        });
    
    
        $.post('models/func.php', { type: 'login', data: form }, function(data) {
            var type;
            var resp = JSON.parse(data);
    
    
            setTimeout(function() {
                if (resp.error == 1) {
                    type = Swal.fire({
                        type: 'error',
                        title: 'Oops...',
                        text: 'Error al iniciar sesión!',
                        footer: 'Tus credenciales son incorrectos!!'
                    });
                } else {
                    type = Swal.fire({
                        type: 'success',
                        title: 'Genial',
                        text: 'Gracias por ingresar!'
                    });;
                }
            }, 2000);
    
            if (resp.error == 0) {
                setTimeout(function() { location.href = "dashboard"; }, 3000);
            }
    
        });
    });

    $("#save_user_reg").click(function() {

        var data = $("#form_users_reg").serialize();

        $.post('models/func.php', { type: 'add_users_reg', data: data }, function(data) {

            var valor = JSON.parse(data);
            
            if(valor.error == 1)
            {
                Swal.fire({
                    title: 'Error registro!',
                    text: 'Su email de usuario ya existe',
                    animation: false
                })
            }

            else
            {
                Swal.fire({
                    title: 'Registro Usuario!',
                    text: 'Usuario fue Registrado satisfactoriamente!!..',
                    animation: false
                })
    
                setTimeout(function() {
                    location.reload();
                }, 2000);
            }


            // console.log(data);
        });
    });
});


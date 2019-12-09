$(document).ready(function(){

    $("#edit_profile").submit(function() {

        var data = $(this).serialize();
    
        $.post('models/func.php', { type: 'edit_profile', data: data }, function(data) {
    
            Swal.fire({
                title: 'Actualizar Datos!',
                text: 'sus datos fueron actualizados satisfactoriamente!!..',
                animation: false
            })
    
            setTimeout(function() {
                location.reload();
            }, 2000);
    
            // console.log(data);
        });
    });

    $("#edit_security").submit(function() {

        var data = $(this).serialize();
    
        $.post('models/func.php', { type: 'edit_security', data: data }, function(data) {
    
            Swal.fire({
                title: 'Actualizar datos de seguridad!',
                text: 'Sus datos de seguridad fueron actuzalidos!!..',
                animation: false
            })
    
            setTimeout(function() {
                location.reload();
            }, 2000);
    
            // console.log(data);
        });
    });
    
    // $('#users_picture').fileinput({
    //     theme: 'fas',
    //     language: 'es',
    //     uploadUrl: 'models/func.php',
    //     allowedFileExtensions: ['doc', 'pdf'],
    //     showCancel: false,
    //     showUpload: false,
    //     uploadExtraData: function() { return { type: 'add_user', data: $("#form_hv").serialize() }; }
    // });

    $(document).ready(function() {
        $('.mdb-select').materialSelect();
    });
    
});


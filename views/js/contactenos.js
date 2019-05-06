$(document).ready(function() {
  
    $('.cargando').hide();

    $(document).ajaxStart(function() {
        $('.cargando').show();
        $('.resultado').hide();
    }).ajaxStop(function() {
        $('.cargando').hide();
        $('.resultado').fadeIn('slow');
    });
  
    $('.form-contacto').submit(function() {

        $.ajax({
            type: 'POST',
            url: $(this).attr('action'),
            data: $(this).serialize(),
           
            success: function(data) {
                $('.resultado').html(data);
                setTimeout("location.reload()", 3000);
            }
        })        
        return false;
    }); 

})  
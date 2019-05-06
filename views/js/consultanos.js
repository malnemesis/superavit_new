$(document).ready(function(){
    
    setInterval(function(abrir){
       
        $('#msg').removeClass('cerrar');
        $('#msg').addClass('abrir');
        $('#texto').removeClass('cerrar');
        $('#texto').addClass('texto-abrir');
            },30000);

    setInterval(function(cerrar){
       
        $('#msg').removeClass('abrir');
        $('#msg').addClass('cerrar');
        $('#texto').removeClass('texto-abrir');
        $('#texto').addClass('cerrar');
            },50000);
        
 });
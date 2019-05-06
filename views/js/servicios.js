 $(document).ready(function() {

     $("#btnc").hide();
     $("#c").show();
     $("#btnt").hide();
     $("#t").show();
     $("#btnf").hide();
     $("#f").show();
     $("#btna").hide();
     $("#a").show();

     $(window).resize(function() {

         var alto = $(window).height();
         var ancho = $(window).width();

         if (ancho <= 360) {
             $("#btnc").show();
             $("#c").hide();
             $("#btnt").show();
             $("#t").hide();
             $("#btnf").show();
             $("#f").hide();
             $("#btna").show();
             $("#a").hide();

         }

     });

 });
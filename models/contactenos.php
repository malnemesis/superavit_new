<?php 

   $nombres = $_POST['nombres'];
   $correo = $_POST['correo'];
   $tel = $_POST['tel'];

   $header = 'From: ' .$nombres . " \r\n";
   $header .= "X-Mailer: PHP/" . phpversion() . " \r\n";
   $header .= "Mime-Version: 1.0 \r\n";
   $header .= "Content-Type: text/plain";

   $info = "Este mensaje fue enviado por: "  . $nombres ." \r\n";
   $info .= "Su correo es: " . $correo . " \r\n";
   $info .= "Su teléfono es: " . $tel . " \r\n";
   $info .= "Enviado: " . date('d/m/Y', time());

   $destino="info@superavitasesores.com.ec";
   $asunto="CONTACTO";

   mail($destino,utf8_decode($asunto), utf8_decode($info), $header);

echo '<div class="alert alert-success" role="alert">
      Su mensaje fue enviado exitosamente. <strong>Gracias!</strong>
      </div>';







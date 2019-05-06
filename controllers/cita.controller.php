<?php

class ControladorCita{

    public function ctrCrearCita(){

        if (isset($_POST["nuevafecha"])) {

            if(preg_match('/^[a-zA-Z0-9ñÑáéíóúÁÉÍÓÚ ]+$/', $_POST["nuevaempresa"]) &&
                preg_match('/^[a-zA-Z0-9ñÑáéíóúÁÉÍÓÚ ]+$/', $_POST["nuevocontacto"]) &&
                preg_match('/^[^0-9][a-zA-Z0-9_]+([.][a-zA-Z0-9_]+)*[@][a-zA-Z0-9_]+([.][a-zA-Z0-9_]+)*[.][a-zA-Z]{2,4}$/', $_POST["nuevoemail"]) && 
                preg_match('/^[()\-0-9 ]+$/', $_POST["nuevotelefono"]) && 
                preg_match('/^[#\.\-a-zA-Z0-9 ]+$/', $_POST["nuevadireccion"])){

            $datos=array("fecha"=>$_POST["nuevafecha"],
                            "hora"=>$_POST["nuevahora"],
                            "empresa"=>$_POST["nuevaempresa"],
                            "contacto"=>$_POST["nuevocontacto"],
                            "direccion"=>$_POST["nuevadireccion"],
                            "telefono"=>$_POST["nuevotelefono"],
                            "email"=>$_POST["nuevoemail"]);

            $correoDestino= "info@superavitasesores.com.ec";

            $asunto="CITA";
            
            $mensaje = "Este mensaje fue enviado por: "  . $_POST["nuevocontacto"] ." \r\n";
            $mensaje .= "Fecha: " . $_POST["nuevafecha"] . " \r\n";
            $mensaje .= "Hora: " . $_POST["nuevahora"] . " \r\n";
            $mensaje .= "Enviado: " . date('d/m/Y', time());

            $cabecera = 'From: ' . $_POST["nuevoemail"] . " \r\n";
            $cabecera .= "X-Mailer: PHP/" . phpversion() . " \r\n";
            $cabecera .= "Mime-Version: 1.0 \r\n";
            $cabecera .= "Content-Type: text/plain";
                
            $envio = mail($correoDestino, $asunto, $mensaje, $cabecera);

            $tabla="cita";

            $respuesta=ModeloCita::mdlIngresarCita($tabla, $datos);

            if ($envio == true && $respuesta == "OK") {
                
                echo '<script>

                swal({

                    type: "success",
                    title: "¡La cita ha sido guardada correctamente!",
                    showConfirmButton: true,
                    confirmButtonText: "Cerrar"

                }).then(function(result){

                    if(result.value){

                        window.location = "index.php";

                    }

                });

                </script>';

            }

            }else {

                echo '<script>

                swal({

                    type: "error",
                    title: "¡La cita no puede ir vacía o llevar caracteres especiales!",
                    showConfirmButton: true,
                    confirmButtonText: "Cerrar"

                }).then(function(result){

                    if(result.value){

                        window.location = "index.php";

                    }

                });

                </script>';

            }

        }

    }

}
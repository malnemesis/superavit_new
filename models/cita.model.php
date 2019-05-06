<?php

require_once "conexion.php";

class ModeloCita{

        public function mdlIngresarCita($tabla, $datos){

            $stmt=Conexion::conectar()->prepare("INSERT INTO $tabla (fecha, hora, empresa, contacto, direccion, telefono, email) 
            VALUES (:fecha, :hora, :empresa, :contacto, :direccion, :telefono, :email)");

            $stmt->bindParam(":fecha", $datos["fecha"], PDO::PARAM_STR);
            $stmt->bindParam(":hora", $datos["hora"], PDO::PARAM_STR);
            $stmt->bindParam(":empresa", $datos["empresa"], PDO::PARAM_STR);
            $stmt->bindParam(":contacto", $datos["contacto"], PDO::PARAM_STR);
            $stmt->bindParam(":direccion", $datos["direccion"], PDO::PARAM_STR);
            $stmt->bindParam(":telefono", $datos["telefono"], PDO::PARAM_STR);
            $stmt->bindParam(":email", $datos["email"], PDO::PARAM_STR);

            if ($stmt->execute()) {
                return "OK";
            }else {
                return "ERROR";
            }
            $stmt->close();
            $stmt = null;
        }
}
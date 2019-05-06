<?php

class Conexion{

	static public function conectar(){

		$link = new PDO("mysql:host=localhost;dbname=superavi_citas",
			            "superavitasesore",
			            "2584C;94qr@=");

		$link->exec("set names utf8");

		return $link;

	}

}
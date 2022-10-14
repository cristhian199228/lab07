<?php 
$contrasena = "Jg2JP9n3XpUdHJ";
$usuario = "Tecsup";
$nombre_bd = "crud";

try {
	$bd = new PDO (
		'mysql:host=190.119.144.252;
		dbname='.$nombre_bd,
		$usuario,
		$contrasena,
		array(PDO::MYSQL_ATTR_INIT_COMMAND => "SET NAMES utf8")
	);
} catch (Exception $e) {
	echo "Problema con la conexion: ".$e->getMessage();
}
?>

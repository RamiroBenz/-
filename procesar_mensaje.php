<?php 

$conexion = mysql_connect("localhost", "rbdesignweb.argentina", "rbdesignweb.argentina");
mysql_select_db(db_mensajes, $conexion);

if ($conexion) {
	mysql_query("INSERT INTO mensaje(nombre, mail, mensaje)value('".$_POST["nombre"]."', '".$_POST["mail"]."', '".$_POST["mensaje"]."')", $conexion);

	header("location: contactos.php");
}

mysql_close($conexion);

 ?>
<?php 

$conexion = mysqli_connect("localhost", "root", "root", "comprobante5");

if(!$conexion){
	echo 'Error al conectar la base de datos';

}else{
	echo 'Conectado a la Base de Datos de Comprobante5..';

}

 ?>
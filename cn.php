<?php 

$conexion=mysqli_connect("localhost", "root", "root", "edilu1");
if(!$conexion){
	echo 'Error al conectar la base de datos';
}else{
	echo 'Conectando la base de datos Edilu1 para empezar a operar..';
}

 ?>
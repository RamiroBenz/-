<?php 

$usuario = $_POST['usuario'];
$clave = $_POST['clave'];
//Conectar a la base de datos
$conexion = mysqli_connect("localhost", "root", "root", "edilu1");
$consulta="SELECT * FROM login WHERE login ='$usuario' and clave='$clave'";
$resultado = mysqli_query($conexion, $consulta);

$filas=mysqli_num_rows($resultado);

if($filas>0){
	header("location:Index.php");
}else{
	echo "Error en la Autentificacion de la pagina";
}
mysqli_free_result($resultado);
mysqli_close($conexion);

 ?>
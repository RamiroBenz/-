<?php 

include 'cn.php';


$id=$_REQUEST['id'];
$cod = $_POST['Codigo'];
$desc = $_POST['Descripcion'];
$precio= $_POST['Precio']; 
$empresa= $_POST['Empresa'];

$query = "UPDATE Stock SET Codigo='$cod', Descripcion='$desc', Precio='$precio', Empresa='$empresa' WHERE id='$id'";
$resultado=$conexion->query($query);

if ($resultado) {
	header("location: Stock.php");
}else {
	echo "No se ha grabado nada en la Base de Datos...";
}

 ?>
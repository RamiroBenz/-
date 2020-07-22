<?php 

include 'cn.php';


$id=$_REQUEST['id'];
$emp = $_POST['Empresa'];
$dir = $_POST['Direccion'];
$loc= $_POST['Localidad']; 
$tel= $_POST['Telefono'];
$cuit= $_POST['cuit'];


$query = "UPDATE Proveedores SET Empresa='$emp', Direccion='$dir', Localidad='$loc', Telefono='$tel', cuit='$cuit' WHERE id='$id'";

$resultado=$conexion->query($query);

if ($resultado) {

	header("location: Proveedores.php");
}else {

	echo "No se ha grabado nada en la Base de Datos...";
}


 ?>
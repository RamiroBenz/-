<?php 

include 'cn.php';


$id=$_REQUEST['id'];
$ped = $_POST['pedido'];
$fecha = $_POST['fecha'];
$emp= $_POST['empresa']; 
$cod= $_POST['Codigo'];
$desc= $_POST['Descripcion'];
$cant= $_POST['Cantidad'];
$pre= $_POST['Precio'];



$query = "UPDATE Pedidos SET pedido='$ped', fecha='$fecha', empresa='$emp', Codigo='$cod', Descripcion='$desc', Cantidad='$cant', Precio='pre' WHERE id='$id'";

$resultado=$conexion->query($query);

if ($resultado) {

	header("location: Pedidos.php");
}else {

	echo "No se ha grabado nada en la Base de Datos...";
}


 ?>
<!DOCTYPE html>
<html lang="es">
<head>
	<meta charset="UTF-8">
	<title>Obtencion de Stock</title>
	<meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
	<link rel="stylesheet" href="estilos.css">
	<link rel="stylesheet" href="estiloForm.css">
	
</head>
<body>
<h1>Formulario de Stock<small>Obtencion de datos</small></h1>
<?php 
include 'cn.php';



//Obtiene valores del formulario
$codigo = mysqli_real_escape_string($conexion, $_POST["Codigo"]);
$desc = mysqli_real_escape_string($conexion, $_POST["Descripcion"]);
$pre = mysqli_real_escape_string($conexion, $_POST["Precio"]);
$emp = mysqli_real_escape_string($conexion, $_POST["Empresa"]);

//Consulta para insertar
$sql = "INSERT INTO stock (Codigo, Descripcion, Precio, Empresa)
VALUES ('$codigo', '$desc', '$pre', '$emp')";

//Ejecutar la consulta
$resultado = mysqli_query($conexion, $sql);
if (!$resultado) {
	echo 'Error al registrar el articulo';
}else{

	header("location: stock.php");
}
//cerrar conecxion
mysqli_close($conexion);

 ?>
	
</body>
</html>
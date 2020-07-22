<?php

include 'cn.php';

$mensaje = "";
$actualizadas = "";
if(isset($REQUEST["formulario"]))

  {
	$precio = $REQUEST["Precio"];
	$desc= $REQUEST["Descripcion"];
	$id = $REQUEST["id"];

	//Realizar la consulta
	$consulta =  "UPDATE stock SET Precio='$precio', Descripcion='$desc' WHERE id='$id'";

	//Ejecutar la consulta
	$resultado = $conexion->query($consulta);

	//Filas afectadas
	$filas_afectadas = $conexion->affected_rows + 0;
	$actualizadas = "<p>ACTUALIZACIONES: ". $filas_afectadas ."</p>";

	if ($filas_afectadas > 0)
		{
		$mensaje = "<p>PRODUCTO ".strtoupper($id)." ACTUALIZADO</p>";
		}
		else
		{
		$mensaje = "<p>NO SE HA PODIDO ACTUALIZAR EL PRODUCTO</p>";
		}
	}
?>

<!DOCTYPE HTML>
<head>
<title>Modificar Stock</title>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
	<link rel="stylesheet" href="estilos.css">
	<link rel="stylesheet" href="estiloForm.css">
	<style>
		select{
			size:30px;
			font-size: 25px;

		}
		input {
			size: 10px;
			font-size: 25px;
		}
		label {
			font-family: helvetica bold;
			font-size: 25px;
		}
	</style>
</head>
<body>
<?php include 'menu.php'; ?>
<br><br>
<?php 
echo $mensaje;
echo $actualizadas; 
?>
<div align="center">
	<form method="post" action="<?php echo $_SERVER["PHP_SELF"]; ?>" name="formulario" >
	<br>
		<h1><u>Actualizar Precio:</u></h1>
		<br>
		<br>
		<br>
		<label for=""><b>Codigo:</b></label>
		<select name='id'>
			<option value=''>Seleccionar</option>
			<?php
			//Extraer los productos para el select
			$consulta = "SELECT * FROM stock";
			$extraer = $conexion->query($consulta);
			while ($fila = $extraer->fetch_array())
			{
			echo "<option value='".$fila['id']."'>".$fila['Codigo']."</option>\n";
			}
			?>
			</select>
			
			<label for=""><b>Descripcion:</label></b><input type="text" name="precio" size="30" value="<?php echo $row['Descripcion']; ?>">


			<label for=""><b>Precio:</label></b><input type="text" name="precio" size="5">
			<input type="hidden" name="formulario">
			<br>
			<input type="submit" value="Modificar" class="formulario__submit">
	</form>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>

<?php
//Extraer los productos disponibles con su precio
$consulta = "SELECT * FROM Stock";

$extraer = $conexion->query($consulta);
while ($fila = $extraer->fetch_array())
	{
	echo  
	"<p>".$fila['Codigo']." : ".$fila["Descripcion"]." : ".$fila["Precio"]."$</p>\n";
	}

	//Cerrar la conexión
	mysqli_close($conexion);
?>
</div>
<br>
<br>
<br>
<br>
<br>
<div class="footer">
<?php include 'footer.php'; ?>
</div>
</body>
</html>

<?php


//En un principio la variable $tabla que muestra el nuevo registro debe declararse y estar en blanco.
$tabla = "";
//En un principio la variable $error que muestra el posible error al filtrar los datos debe declararse y estar en blanco.
$error = "";

/* Si el formulario es enviado */
if (isset($_POST["insertar"]))
{

//Recibir los datos y almacenarlos en una variable
	$numRem=$_POST["numRem"];
	$fecha=$_POST["fecha"];

	$cliente=$_POST["cliente"];
	$direccion=$_POST["direccion"];
	$iva=$_POST["iva"];

	$localidad=$_POST["localidad"];
	$provincia=$_POST["provincia"];
	$cuit=$_POST["cuit"];

	$cant=$_POST["cant"];
	$cod=$_POST["codigo"];
	$desc=$_POST["descripcion"];
	$cantCajas=$_POST["cantCajas"];


//Filtrar los datos por motivos de seguridad
//Este proceso siempre hay que llevarlo a cabo al hacer consultas a la base de datos
//Para cada campo aplicaré un filtro de no pasarlo no se realizará la inserción del nuevo registro.

if (!preg_match("/^[a-zA-ZñÑáéíóúÁÉÍÓÚäëïöüÄËÏÖÜàèìòùÀÈÌÒÙ\s]+$/", $numRem)) //letras latinas + espacios
{
$error = "Ha ocurrido un error, datos no permitidos.";
}
else if(!preg_match("/^[a-zA-ZñÑáéíóúÁÉÍÓÚäëïöüÄËÏÖÜàèìòùÀÈÌÒÙ\s]+$/", $fecha)) //letras latinas + espacios
{
$error = "Ha ocurrido un error, datos no permitidos.";
}
else if(!preg_match("/^[a-zA-Z0-9ñÑáéíóúÁÉÍÓÚäëïöüÄËÏÖÜàèìòùÀÈÌÒÙ\s\_\-\/\º\ª\.\,\:\;]+$/", $cliente)) //letras latinas + números + espacios + algunos caracteres más
{
$error = "Ha ocurrido un error, datos no permitidos.";
}
else if(!preg_match("/^[a-zA-Z0-9ñÑáéíóúÁÉÍÓÚäëïöüÄËÏÖÜàèìòùÀÈÌÒÙ\s\_\-\/\º\ª\.\,\:\;]+$/", $direccion)) //letras latinas + números + espacios + algunos caracteres más
{
$error = "Ha ocurrido un error, datos no permitidos.";
}
else if(!preg_match("/^[a-zA-Z0-9ñÑáéíóúÁÉÍÓÚäëïöüÄËÏÖÜàèìòùÀÈÌÒÙ\s\_\-\/\º\ª\.\,\:\;]+$/", $iva)) //letras latinas + números + espacios + algunos caracteres más
{
$error = "Ha ocurrido un error, datos no permitidos.";
}
else if(!preg_match("/^[a-zA-ZñÑáéíóúÁÉÍÓÚäëïöüÄËÏÖÜàèìòùÀÈÌÒÙ\s]+$/", $localidad)) //letras latinas + espacios
{
$error = "Ha ocurrido un error, datos no permitidos.";
}
else if(!preg_match("/^[a-zA-ZñÑáéíóúÁÉÍÓÚäëïöüÄËÏÖÜàèìòùÀÈÌÒÙ\s]+$/", $provincia)) //letras latinas + espacios
{
$error = "Ha ocurrido un error, datos no permitidos.";
}
else if(!preg_match("/^[0-9]+$/", $cuit)) //Sólo números
{
$error = "Ha ocurrido un error, datos no permitidos.";
}
else if(!preg_match("/^[0-9]+$/", $cant)) //Sólo números
{
$error = "Ha ocurrido un error, datos no permitidos.";
}
else if(!preg_match("/^[0-9]+$/", $cod)) //Sólo números
{
$error = "Ha ocurrido un error, datos no permitidos.";
}
else if(!preg_match("/^[a-zA-ZñÑáéíóúÁÉÍÓÚäëïöüÄËÏÖÜàèìòùÀÈÌÒÙ\s]+$/", $desc)) //letras latinas + espacios
{
$error = "Ha ocurrido un error, datos no permitidos.";
}
else
{
//Datos de conexión a la base de datos.
$mysql_usuario = "root";
$mysql_password = "root";
$mysql_host = "localhost";
$mysql_database = "edilu1";

//Conectar
$conexion = mysql_connect($mysql_host, $mysql_usuario, $mysql_password, true);

//Seleccionamos la base datos y la conexión, die para mostrar el error si existe algún problema.
mysql_select_db($mysql_database, $conexion) || die('No pudo conectarse: '.mysql_error());


//Preparar la consulta para insertar los datos
//Ejecutar Consulta para insertar en Database
	$insertar = "INSERT INTO remito (numRem, fecha, cliente, direccion, iva, localidad, provincia, cuit, cant, codigo, descripcion, cantCajas)";

	$consulta = "VALUES ('$numRem', '$fecha', '$cliente', '$direccion', '$iva', '$localidad', '$provincia', '$cuit', '$cant', '$cod', '$desc', '$cantCajas')";

	//Ejecutar la consulta para guardar el registro
	$resultado = mysql_query($consulta, $conexion) or die(mysql_error());

	//Mostrar el registro nuevo en una tabla
	$tabla = "<table border='1' cellpadding='10'>\n";
	$tabla .= "<tr><th>Cantidad</th><th>Codigo</th><th>Descripcion</th><th>Cant.Cajas</th></tr>\n";
	$tabla .= "<tr>
	          <td>$cant</td>
	          <td>$cod</td>
	          <td>$desc</td>
			  <td>$cantCajas</td>
			  </tr>\n";
	$tabla .= "</tabla>\n";

	//Cerrar la conexión
	mysql_close($conexion);
	}
}
?>

<!DOCTYPE HTML>
<html>
<head>
<title>Insertar datos en la base de datos MySql con PHP</title>
</head>
<body>
<H3>INSERTAR Remito</H3>

<!-- Para mostrar un posible error al filtrar los datos -->
<p style="color: red;"><?php echo $error; ?></p>
<!-- Para mostrar el nuevo registro -->
<p style="color: blue;"><?php echo $tabla; ?></p>

<!-- con $_SERVER["PHP_SELF"] estamos diciendo que la consulta será enviada al mismo archivo desde donde se envía el formulario, es decir éste -->
<form action="remito12.php" method="post">
<table border="0">
<tr>
<td>Cantidad:</td>
<td><input type="text" name="nombre"></td>
</tr>
<tr>
<td>Codigo:</td>
<td><input type="text" name="apellidos"></td>
</tr>
<tr>
<td>Descripcion:</td>
<td><input type="text" name="direccion"></td>
</tr>
<tr>
<td>Cant.Cajas:</td>
<td><input type="text" name="localidad"></td>
</tr>
<tr>

</tr>
<tr>
<td>
<!-- El envío de este campo 'insertar' será capturado por $_POST para realizar la consulta -->
<input type="hidden" name="insertar">
</td>
<td><input type="submit" value="Enviar"></td>
</tr>
</table>
</form>
</body>
</html>
